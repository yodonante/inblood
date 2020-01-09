<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cita;
use App\User;

class CitaController extends Controller
{
    /**
     * Lista todas las citas, del centro médico.
     *
     * @return App\Cita $cita
     */
    public function listar()
    {
        $centromedico_id = User::find(auth()->id())->centromedico_id;
        $citas = Cita::select(
            'citas.id',
            'citas.nombre',
            'citas.fecha',
            'citas.hora',
            'citas.persona_id'
        )
        ->where('cita.centromedico_id', '=', $centromedico_id)
        ->get();

        return $citas;
    }

    /**
     * Crea una nueva cita.
     *
     * @param  mixed $request
     *
     * @return String 'Ok'
     */
    public function crear(Request $request)
    {
        $this->validate($request,[
            'nombre'    => 'required',
            'fecha'  => 'required',
            'hora'  => 'required',
            'persona_id'  => 'required',
        ]);

        $cita = new Cita;
        $cita->nombre = $request->nombre;
        $cita->fecha = $request->fecha;
        $cita->hora = $request->hora;
        $cita->persona_id = $request->persona_id;
        if($request->centromedico_id ==1){
            $cita->centromedico_id = 1;
        }else{
            $cita->centromedico_id = auth()->user()->centromedico_id;
        }
        $cita->save();

        return 'Ok';
    }

    /**
     * Edita un caso existente
     *
     * @param  mixed $request
     *
     * @return String 'Ok'
     */
    public function editar(Request $request)
    {
        $this->validate($request,[
            'id'    => 'required',
            'nombre'    => 'required',
            'fecha'  => 'required',
            'hora'  => 'required',
            'persona_id'  => 'required',
        ]);

        $id = $request->id;
        $cita = Cita::find($id);
        $cita->nombre = $request->nombre;
        $cita->fecha = $request->fecha;
        $cita->hora = $request->hora;
        $cita->persona_id = $request->persona_id;
        $cita->save();

        return 'Ok';
    }

    /**
     * EliminAr una cita.
     *
     * @param  mixed $request
     *
     * @return void
     */
    public function eliminar(Request $request)
    {
        $this->validate($request,[
            'id'    => 'required',
        ]);

        Cita::destroy($request->id);
        return 'Ok';
    }

    /**
     * Devuelve el id de la persona que posee el DNI introducido.
     *
     * @param  mixed $request
     *
     * @return void
     */
    public function buscarPorDNI(Request $request)
    {
        $this->validate($request,[
            'dni'   => 'required',
        ]);

        $dni = $request->dni;

        $persona = Persona::where('dni', '=', $dni)->first();

        if ($persona == null) {
            return 'Sin coincidencias';
        } else {
            $id = $persona->id;
            return $id;
        }
    }

    /**
     * Muestra todas las citas, del centro médico.
     *
     * @return App\Cita $cita
     */
    public function mostrar(Request $request)
    {
        $this->validate($request,[
            'persona_id'   => 'required',
        ]);
        $centromedico_id = User::find(auth()->id())->centromedico_id;
        $citas = Cita::join('users', 'citas.persona_id', '=', 'users.persona_id')
        ->select(
            'citas.id',
            'citas.nombre',
            'citas.fecha',
            'citas.hora',
            'citas.persona_id'
        )
        ->where('citas.persona_id', '=', $request->persona_id)
        ->where('users.centromedico_id', '=', $centromedico_id)
        ->get();

        return $citas;
    }

    public function mostrarPorFecha(Request $request)
    {
        $this->validate($request,[
            'fecha'   => 'required',
        ]);

        $centromedico_id = User::find(auth()->id())->centromedico_id;
        $citas = Cita::join('users', 'citas.persona_id', '=', 'users.persona_id')
        ->leftJoin('personas', 'users.persona_id', '=', 'personas.id')
        ->select(
            'citas.hora',
            'personas.nombre',
            'personas.apellido',
            'personas.dni',
            'citas.persona_id'
        )
        ->where('citas.fecha', '=', $request->fecha)
        ->where('users.centromedico_id', '=', $centromedico_id)
        ->orderBy('hora', 'asc')
        ->get();

        return $citas;
    }
}
