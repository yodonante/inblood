<?php

namespace App\Http\Controllers;

use App\Persona;
use App\User;
use App\Dato;
use App\CampoContacto;
use App\Llamada;
use App\Cita;
use App\Nota;
use App\Donacion;
use App\Controllers\MailController;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

use App\Imports\PersonasImport;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

class PersonaController extends Controller
{
    /**
     * Lista a todas las personas.
     * El parametro $role, llega de las funciones listarDonantes() y listarUsuarios()
     *
     * @return \App\Persona  $personas
     */
    public function listar($role = false)
    {
        $centromedico_id = User::find(auth()->id())->centromedico_id;
        $personas = Persona::join('users', 'users.persona_id', '=', 'personas.id')->distinct()
        ->leftJoin('model_has_roles', 'model_has_roles.model_id', '=', 'users.id')
        ->leftJoin('roles', 'model_has_roles.role_id', '=', 'roles.id')
        ->leftJoin('datos', 'personas.id', '=', 'datos.persona_id')
        ->leftJoin('campo_contactos', 'campo_contactos.id', '=', 'datos.campo_contacto_id')
        ->leftJoin('distritos', 'distritos.id', '=', 'personas.distrito_id')
        ->leftJoin('provincias', 'distritos.provincia_id', '=', 'provincias.id')
        ->leftJoin('departamentos', 'distritos.departamento_id', '=', 'departamentos.id')
        ->select(
            'users.id',                                             // ID Usuario
            'users.inbound_estado_id',                                             // ID Usuario
            'users.email',                                          // email
            'personas.dni',                                         // DNI
            'personas.nombre',                                      // Nombre
            'personas.apellido',                                    // Apellido
            'personas.fechaNacimiento',                             // Fecha de nacimiento
            'personas.fecha_ultima_donacion',                       // Fecha últma de donación
            'personas.fecha_proxima_donacion',                      // Fecha próxima de donación
            'users.persona_id',                                  // ID Persona
            'personas.sexo',                                      // Sexo
            DB::raw('CASE
                WHEN personas.tiposangre_id < 3 THEN "A"
                WHEN personas.tiposangre_id < 5 THEN "B"
                WHEN personas.tiposangre_id < 7 THEN "AB"
                WHEN personas.tiposangre_id < 9 THEN "O"
                ELSE "Desconocido"
                END AS sangre'),                                    // sangre
            DB::raw('CASE
                WHEN personas.tiposangre_id IN(1,3,5,7) THEN "+"
                WHEN personas.tiposangre_id IN(2,4,6,8) THEN "-"
                ELSE "Desconocido" 
                END AS factor'),                                                        // factor
            'distritos.nombre AS distrito',                                             // Distrito ID
            'distritos.id AS distrito_id',                                              // Distrito ID
            'distritos.provincia_id AS provincia',                                      // Provincia ID
            'distritos.departamento_id AS departamento',                                // Departamento ID
            'roles.name as rol',                                                        // Rol
            DB::raw('(TIMESTAMPDIFF(YEAR, personas.fechaNacimiento, CURDATE())) as edad'),
            DB::raw('datos.valor as celular'),
            DB::raw('datos.id as dato_id')
            )
        ->where('users.centromedico_id', '=', $centromedico_id)
        ->where('campo_contactos.centromedico_id', '=', $centromedico_id)
        ->whereIn('campo_contactos.nombre', ['celular'])
        ->when($role, function ($query, $role) {
            $query->whereIn('role_id', $role);
            if ($role == [4]) {
                $query->leftJoin('inbound_estados', 'users.inbound_estado_id', '=', 'inbound_estados.id')
                ->where('roles.name', '=', 'donante')
                ->addSelect('personas.fecha_ultima_donacion')
                ->addSelect('personas.fecha_proxima_donacion')
                ->addSelect('inbound_estados.id as inbound_estado_id')
                ->addSelect('inbound_estados.nombre as inbound_estados');
            } else {
                $query->orWhereNull('campo_contactos.nombre')
                ->addSelect('roles.id')
                ->orderBy('roles.id')
                ;
            }
            return $query;
        })
        ->get();

        return $personas;
    }

    /**
     * Crear un instancia del modelo Persona
     *
     * @param  Request $request
     *
     * @return String
     */
    public function crear(Request $request)
    {
        $request->validate([
            'dni'                       => 'required',
            'nombre'                    => 'required',
            'apellido'                  => 'required',
            'fechaNacimiento'           => 'required',
            'sexo'                      => 'required',
            'sangre'                    => 'required',
            'factor'                    => 'required',
            'distrito_id'               => 'required',
            'tipo_usuario'              => 'required',
            'email'                     => 'required',
            'password'                  => 'required',
            'celular'                   => 'required',
            'inbound_estado_id'         => 'required',
            ]);

        $persona = new Persona;
        $persona->dni = $request->dni;
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->fechaNacimiento = $request->fechaNacimiento;
        $persona->sexo = $request->sexo;
        if ($request->fecha_ultima_donacion != null) {
            $persona->fecha_ultima_donacion = $request->fecha_ultima_donacion;
        }
        if ($request->fecha_proxima_donacion != null) {
            $persona->fecha_proxima_donacion = $request->fecha_proxima_donacion;
        }
        $persona->distrito_id = $request->distrito_id;
        if ($request->sangre == "A") {
            if ($request->factor == "+") {
                $persona->tiposangre_id = 1;
            } else {
                $persona->tiposangre_id = 2;
            } 
        } elseif ($request->sangre == "B") {
            if ($request->factor == "+") {
                $persona->tiposangre_id = 3;
            } else {
                $persona->tiposangre_id = 4;
            } 
        } elseif ($request->sangre == "AB") {
            if ($request->factor == "+") {
                $persona->tiposangre_id = 5;
            } else {
                $persona->tiposangre_id = 6;
            } 
        } elseif ($request->sangre == "O") {
            if ($request->factor == "+") {
                $persona->tiposangre_id = 7;
            } else {
                $persona->tiposangre_id = 8;
            } 
        } else {
            $persona->tiposangre_id = 9;
        }
        
        $persona->save();
        

        $this->asignarCelular($persona, $request);
                
        $dato = new Dato; // Correo
        //Lo siguiente es temporal, luego debe borrarse:
        if($request->centromedico_id == 1){
            $centromedico_id = 1;
        }else{
            $centromedico_id = User::find(auth()->id())->centromedico_id;
        }
        $correo = CampoContacto::where('centromedico_id', '=', $centromedico_id)->where('nombre', '=', 'correo')->first();
        $dato->valor = $request->email;
        $dato->campo_contacto_id = $correo->id;
        $dato->persona_id = $persona->id;
        $dato->save();
        
        if ($request->tipo_usuario == 'paciente') {
            return 'Ok';
        }
        
        $usuario = $this->crearUsuario($persona, $request);
        $usuario->inbound_estado_id = $request->inbound_estado_id;
        $usuario->save();
        switch ($request->tipo_usuario) {
            case 'donante':
                if ($this->rolDonante($usuario) != 'Ok') {
                    return 'No tienes permisos';
                }else{
                    return 'Ok';
                }
                break;
            case 'centro_medico':
                if ($this->rolCentroMedico($usuario) != 'Ok') {
                    return 'No tienes permisos';
                }else{
                    return 'Ok';
                }
                break;
            case 'admin':
                if ($this->rolAdmin($usuario) != 'Ok') {
                    return 'No tienes permisos';
                }else{
                    return 'Ok';
                }
                break;
            case 'donito':
                if ($this->rolDonito($usuario) != 'Ok') {
                    return 'No tienes permisos';
                }else{
                    return 'Ok';
                }
                break;
        }
        return 'Ok';

    }

    /**
     * Actualiza una instancia Persona.
     *
     * @param  Request $request
     *
     * @return String
     */
    public function editar(Request $request)
    {
        $request->validate([
            'id'                => 'required',
            'dni'               => 'required',
            'nombre'            => 'required',
            'apellido'          => 'required',
            'fechaNacimiento'   => 'required',
            'sexo'              => 'required',
            'factor'            => 'required',
            'sangre'            => 'required',
            'distrito_id'       => 'required',
            'tipo_usuario'      => 'required',
            'celular'           => 'required',
            'inbound_estado_id' => 'required',
        ]);

        $usuario = User::find($request->id);
        
        $persona = $usuario->persona;
        $persona->dni = $request->dni;
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->fechaNacimiento = $request->fechaNacimiento;
        $persona->sexo = $request->sexo;
        if ($request->fecha_ultima_donacion != null) {
            $persona->fecha_ultima_donacion = $request->fecha_ultima_donacion;
        }
        if ($request->fecha_proxima_donacion != null) {
            $persona->fecha_proxima_donacion = $request->fecha_proxima_donacion;
        }
        $persona->distrito_id = $request->distrito_id;
        
        if ($request->sangre == "A") {
            if ($request->factor == "+") {
                $persona->tiposangre_id = 1;
            } else {
                $persona->tiposangre_id = 2;
            } 
        } elseif ($request->sangre == "B") {
            if ($request->factor == "+") {
                $persona->tiposangre_id = 3;
            } else {
                $persona->tiposangre_id = 4;
            } 
        } elseif ($request->sangre == "AB") {
            if ($request->factor == "+") {
                $persona->tiposangre_id = 5;
            } else {
                $persona->tiposangre_id = 6;
            } 
        } elseif ($request->sangre == "O") {
            if ($request->factor == "+") {
                $persona->tiposangre_id = 7;
            } else {
                $persona->tiposangre_id = 8;
            } 
        } else {
            $persona->tiposangre_id = 9;
        }
        
        $persona->save();
        
        $usuario->inbound_estado_id = $request->inbound_estado_id;
        $usuario->save();
        $usuario->syncRoles($request->tipo_usuario);
        
        $celular = Dato::where('datos.campo_contacto_id', '=', '2')
                        ->where('datos.persona_id', '=', $persona->id)
                        ->leftJoin('campo_contactos', 'campo_contactos.id', '=', 'datos.campo_contacto_id')
                        ->where('campo_contactos.centromedico_id', '=', auth()->user()->centromedico_id)
                        ->first();
        if ($celular != null) {
            $celular->valor = $request->celular;
            $celular->save();
        } else {
            $this->asignarCelular($persona, $request);
        }
        return 'Ok';
    }

    /**
     * Elimana una intancia de tipo persona.
     *
     * @param  Request $request
     *
     * @return String
     */
    public function eliminar(Request $request)
    {
        $persona = Persona::find($request->id);

        $persona->delete();

        return 'Ok';
    }

    /**
     * Elimana una instancia de tipo persona y de tipo usuario.
     *
     * @param  Request $request
     *
     * @return String
     */
    public function eliminarvarios(Request $request)
    {
        $this->validate($request,[
            'usuarios' => 'required',
            ]);
            
            $usuarios =  json_decode($request->get('usuarios'),true);
            foreach ($usuarios as $usuario) {
                // $persona=Persona::find($usuario['persona_id']);
                // $persona->delete();
                $user=User::find($usuario['id']);
                $user->delete();
            }
            
            return 'Ok';
        }
        
    /**
     * Elimana una intancia de tipo usuario.
     *
     * @param  Request $request
     *
     * @return String
     */
    public function eliminarUsuario(Request $request)
    {
        $usuario = Usuario::find($request->id);

        $usuario->delete();

        return 'Ok';
    }

    /**
     * Crea un usuario
     *
     * @param  Persona $persona
     * @param  Request $request
     *
     * @return Usuario
     */
    public function crearUsuario($persona, $request)
    {
        $user = new User;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->persona_id = $persona->id;
        if($request->centromedico_id == 1){
            $user->centromedico_id = 1;
        }else{
            $user->centromedico_id = auth()->user()->centromedico_id;
        }
        //$user->inbound_estado_id = 1;

        $user->save();
        return $user;
    }

    /**
     * Asigna al usuario el rol de Donante
     *
     * @param  User $user
     *
     * @return String
     */
    public function rolDonante($user)
    {
        $user->assignRole('donante');
        return "Ok";

        // if (auth()->user()->can('crear donantes')) {
        //     $user->assignRole('donante');
        //     return "Ok";
        // }
        // return 'No';
    }

    /**
     * Asigna al usuario el rol de Centro Medico
     *
     * @param  User $user
     *
     * @return String
     */
    public function rolCentroMedico($user)
    {
        if (auth()->user()->can('crear usuarios')) {
            $user->assignRole('centro medico');
            return "Ok";
        }
        return 'No';
    }

    /**
     * Asigna al usuario el rol de Admin
     *
     * @param  User $user
     *
     * @return String
     */
    public function rolAdmin($user)
    {
        if (auth()->user()->can('crear admins')) {
            $user->assignRole('admin');
            return "Ok";
        }
        return 'No';
    }

    /**
     * Asigna al usuario el rol de Donito
     *
     * @param  User $user
     *
     * @return String
     */
    public function rolDonito($user)
    {
        if (auth()->user()->can('crear donitos')) {
            $user->assignRole('donito');
            return "Ok";
        }
        return 'No';
    }

    /**
     * Devuelve los roles que el usuario puede crear.
     *
     * @return Array
     */
    public function getRoles()
    {
        $roles = [];
        if (auth()->user()->can('crear donitos')) {
            array_push($roles, 'donito');
        }
        if (auth()->user()->can('crear admins')) {
            array_push($roles, 'admin');
        }
        if (auth()->user()->can('crear usuarios')) {
            array_push($roles, 'centro medico');
        }
        if (auth()->user()->can('crear donantes')) {
            array_push($roles, 'donante');
        }
        if (auth()->user()->can('crear pacientes')) {
            array_push($roles, 'paciente');
        }

        return $roles;
    }

    /**
     * Importa personas de un excel.
     * $row[0] => DNI
     * $row[1] => Nombre
     * $row[2] => Apellido
     * $row[3] => Fecha de nacimiento
     * $row[4] => Sexo (1 o 0)
     * $row[5] => Tipo de sangre ID (1-9)
     * $row[6] => Distrito ID
     * $row[7] => Correo
     * $row[8] => Celular
     *
     * @param  mixed $request
     *
     * @return void
     */
    public function importar(Request $request)
    {
        $this->validate($request,[
            'archivo' => 'required',
        ]);

        if ($request->file('archivo')->isValid()) {
            Excel::import(new PersonasImport, request()->file('archivo'));
            return 'Ok';
        }

        return 'No';
    }

    public function listarDonantes()
    {
        return $this->listar([4]);
    }

    public function listarUsuarios()
    {
        return $this->listar([1,2,3]);
    }

    /**
     * Asigna el dato de celular a una persona
     *
     * @param  \App\Persona $persona
     * @param  Illuminate\Http\Request $request
     *
     * @return String 'Ok'
     */
    public function asignarCelular(Persona $persona, Request $request)
    {
        $dato = new Dato; // Celular
        if($request->centromedico_id == 1){
            $centromedico_id = 1;
        }else{
            $centromedico_id = User::find(auth()->id())->centromedico_id;
        }
        $celular = CampoContacto::where('centromedico_id', '=', $centromedico_id)->where('nombre', '=', 'celular')->first();
        $dato->valor = $request->celular;
        $dato->campo_contacto_id = $celular->id;
        $dato->persona_id = $persona->id;
        $dato->save();

        return 'Ok';
    }

    /**
     * Muestra la información de una persona y sus datos.
     *
     * @param  mixed $request
     *
     * @return void
     */
    public function mostrar(Request $request, $tipo_busqueda = 'id')
    {
        
        if ($tipo_busqueda == 'id') {
            $this->validate($request,[
                'id' => 'required',
            ]);
            $id = $request->id;
        } if ($tipo_busqueda == 'dni') {
            $dni = $request->dni;
            $id = Persona::where('dni', '=', $dni)->first();
            if ($id == null) {
                return "No";
            }else{
                $id = Persona::where('dni', '=', $dni)->first()->id;
            }
            
        }
        $perfil = [];

        if($request->centromedico_id==1){
            $centromedico_id = 1;
        }else{
            $centromedico_id = auth()->user()->centromedico_id;
        }
        $persona =   Persona::find($id)
                    ->leftJoin('users', 'users.persona_id', '=', 'personas.id')
                    ->leftJoin('distritos', 'distritos.id', '=', 'personas.distrito_id')
                    ->leftJoin('provincias', 'provincias.id', '=', 'distritos.provincia_id')
                    ->leftJoin('departamentos', 'departamentos.id', '=', 'distritos.departamento_id')
                    ->leftJoin('inbound_estados', 'users.inbound_estado_id', '=', 'inbound_estados.id')
                    ->leftJoin('datos', 'personas.id', '=', 'datos.persona_id')
                    ->where('users.centromedico_id', '=', $centromedico_id)
                    ->leftJoin('campo_contactos', 'campo_contactos.id', '=', 'datos.campo_contacto_id')
                    ->where('campo_contactos.centromedico_id', '=', $centromedico_id)
                    ->whereIn('campo_contactos.nombre', ['celular'])
                    ->where('personas.id', '=', $id)
                    ->select(
                        'personas.id as persona_id',
                        'users.id as user_id',
                        'personas.dni as dni',
                        'personas.nombre as nombre',
                        'personas.apellido as apellido',
                        'personas.sexo as sexo',
                        'personas.fecha_ultima_donacion',
                        'personas.fecha_proxima_donacion',
                        DB::raw('CASE
                            WHEN personas.tiposangre_id < 3 THEN "A"
                            WHEN personas.tiposangre_id < 5 THEN "B"
                            WHEN personas.tiposangre_id < 7 THEN "AB"
                            WHEN personas.tiposangre_id < 9 THEN "O"
                            ELSE "Desconocido"
                            END AS sangre'),
                        DB::raw('CASE
                            WHEN personas.tiposangre_id IN(1,3,5,7) THEN "+"
                            WHEN personas.tiposangre_id IN(2,4,6,8) THEN "-"
                            ELSE "Desconocido" 
                            END AS factor'),  
                        'distritos.nombre AS distrito',
                        'provincias.nombre AS provincia',
                        'departamentos.nombre AS departamento',
                        'distritos.id AS distrito_id',
                        'distritos.provincia_id AS provincia_id',
                        'distritos.departamento_id AS departamento_id',
                        'users.email as email',
                        'inbound_estados.id as inbound_estado_id',
                        'inbound_estados.nombre as inbound_estados',
                        DB::raw('datos.valor as celular')
                        )
                    ->get();
        $datos  =   Dato::where('persona_id', '=', $id)
                    ->select(
                        'datos.id as id',
                        'campo_contactos.id as campo_contacto_id',
                        'campo_contactos.nombre as nombre',
                        'datos.valor as valor'
                    )
                    ->leftJoin('campo_contactos', 'datos.campo_contacto_id', '=', 'campo_contactos.id')
                    ->where('centromedico_id', '=', $centromedico_id)
                    ->get();
        
        array_push($perfil, $persona, $datos);
        return $perfil;
    }

    public function crearPublico(Request $request)
    {
        $request->validate([
            'dni'               => 'required',
            'nombre'            => 'required',
            'apellido'          => 'required',
            'fechaNacimiento'   => 'required',
            'sexo'              => 'required',
            'sangre'            => 'required',
            'factor'            => 'required',
            'distrito_id'       => 'required',
            'tipo_usuario'      => 'required',
            'email'             => 'required',
            'password'          => 'required',
            'celular'           => 'required',
            ]);

        $request->tipo_usuario = 'donante';
        $request->centromedico_id = 1;
        return $this->crear($request);
    }
    
    /**
     * Muestra la información de una persona y sus datos. Filtrado por DNI
     *
     * @param  mixed $request
     *
     * @return void
     */
    public function mostrarPorDNI(Request $request)
    {
        $this->validate($request,[
            'dni' => 'required',
        ]);
        $request->centromedico_id = 1;
        return $this->mostrar($request, 'dni');
    }

    /**
     * Muestra las llamadas, citas, donaciones y notas de una persona.
     *
     * @param  mixed $request
     *
     * @return void
     */
    public function mostrarActividades(/* Request $request */)
    {
        /* $this->validate($request,[
            'user_id' => 'required',
        ]); */

        $id = 1/* $request->user_id */;
        $user = User::find($id);
        
        $actividades = [];

        # Llamadas
        $llamadas = Llamada::join('datos', 'datos.id', '=', 'llamadas.dato_id')
        ->where('datos.persona_id', '=', $user->persona->id)
        ->join('campo_contactos', 'campo_contactos.id', '=', 'datos.campo_contacto_id')
        ->join('resultado_llamadas', 'resultado_llamadas.id', '=', 'llamadas.resultado_llamada_id')
        ->where('centromedico_id', '=', auth()->user()->centromedico_id)
        ->get();

        foreach ($llamadas as $llamada) {
            $fecha = new Carbon($llamada->fecha . ' '. $llamada->hora);
            $obj = array(  'tipo'              =>  'llamada',
                                    'id'                =>  $llamada->id,
                                    'descripcion'       =>  $llamada->descripcion,
                                    'fecha'             =>  $fecha,
                                    'resultado_llamada' =>  $llamada->nombre,
                                    'dato_id'           =>  $llamada->dato_id,
                                    'celular'           =>  $llamada->valor,
            );
            array_push($actividades, $obj);
        }

        # Citas
        $citas = Cita::where('citas.persona_id', '=', $user->persona->id)
        ->where('centromedico_id', '=', auth()->user()->centromedico_id)
        ->get();

        foreach ($citas as $cita) {
            $fecha = new Carbon($cita->fecha . ' '. $cita->hora);
            $obj = array(  'tipo'              =>  'cita',
                                    'id'                =>  $cita->id,
                                    'descripcion'       =>  $cita->nombre,
                                    'fecha'             =>  $fecha,
            );
            array_push($actividades, $obj);
        }

        # Notas
        $notas = Nota::where('notas.persona_id', '=', $user->persona->id)
        ->where('centromedico_id', '=', auth()->user()->centromedico_id)
        ->get();

        foreach ($notas as $nota) {
            $fecha = new Carbon($nota->created_at);
            $fecha = $fecha->isoFormat('Y-m-d H:i:s');
            $obj = array(  'tipo'              =>  'nota',
                                    'id'                =>  $nota->id,
                                    'descripcion'       =>  $nota->nombre,
                                    'fecha'             =>  $nota->created_at,
            );
            array_push($actividades, $obj);
        }
        
        # Donaciones
        $donaciones = Donacion::join('etapas_donacions', 'donacions.id', '=', 'etapas_donacions.donacion_id')
        ->where('etapas_donacions.persona_id', '=', $user->persona->id)
        ->where('etapas_donacions.centromedico_id', '=', auth()->user()->centromedico_id)
        ->select(
            'donacions.id',
            'donacions.numero_bolsa',
            'donacions.created_at'
        )
        ->get();

        foreach ($donaciones as $donacion) {
            $fecha = new Carbon($donacion->created_at);
            $fecha = $fecha->isoFormat('Y-m-d H:i:s');
            $obj = array(  'tipo'              =>  'donacion',
                                    'id'                =>  $donacion->id,
                                    'descripcion'       =>  $donacion->numero_bolsa,
                                    'fecha'             =>  $donacion->created_at,
            );
            array_push($actividades, $obj);
        }

        # bubble sort
        for ($i=0; $i < sizeof($actividades)-2; $i++) {
            for ($j=$i+1; $j < sizeof($actividades)-1; $j++) { 
                if ($actividades[$i]['fecha'] < $actividades[$j]['fecha']) {
                    $x = $actividades[$i];
                    $actividades[$i] = $actividades[$j];
                    $actividades[$j] = $x;
                }
            }
        }

        return $actividades;
    }
}
