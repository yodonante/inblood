<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Persona;
use App\Mensajeria;
use App\CampoContacto;
use App\Dato;
use App\Departamento;
use App\Provincia;
use App\Distrito;

class MensajeriaController extends Controller
{
    /**
     * Lista las mensajerias que posee el centro médico.
     *
     * @return void
     */
    public function listar()
    {
        $centromedico_id = User::find(auth()->id())->centromedico_id;
        $mensajerias = Mensajeria::where('centromedico_id', '=', $centromedico_id)->get();

        return $mensajerias;
    }

    /**
     * crear
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function crear(Request $request)
    {
        $this->validate($request,[
            'nombre'    => 'required',
            'personas'  => 'required', // Array
        ]);
        
        $mensajeria = new Mensajeria;
        $mensajeria->nombre = $request->nombre;
        $centromedico_id = User::find(auth()->id())->centromedico_id;
        $mensajeria->centromedico_id = $centromedico_id;
        $mensajeria->save();
        
        $personas = json_decode($request->personas);
        
        foreach ($personas as $persona) {
            $personaEncontrada = Persona::find($persona->persona_id);
            $mensajeria->personas()->attach($personaEncontrada);
        }

        return "Ok";
    }

    /**
     * Edita los datos de una mensajeria
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function editar(Request $request)
    {
        $this->validate($request,[
            'id'        => 'required',
            'nombre'    => 'required',
            'personas'  => 'required'
        ]);
        
        $mensajeria = Mensajeria::find($request->id);
        $mensajeria->nombre = $request->nombre;
        $mensajeria->save();
        
        $mensajeria->personas()->detach();
        $mensajeria->personas()->attach($request->personas);

        return "Ok";
    }

    /**
     * Elimina una mensajeria.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function eliminar(Request $request)
    {
        $this->validate($request,[
            'id' => 'required'
        ]);

        Mensajeria::find($request->id)->personas()->detach();
        Mensajeria::destroy($request->id);
        return 'Ok';
    }

    /**
     * Devuelve el array [$mensajeria, $contactos]
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return void
     */
    public function mostrar(Request $request)
    {
        $this->validate($request,[
            'id' => 'required'
        ]);

        $mensajeria = Mensajeria::find($request->id);
        $array = [];
        array_push($array, $mensajeria);
        $contactos = [];
        $personas = $mensajeria->personas;
        $centromedico_id = User::find(auth()->id())->centromedico_id;
        
        foreach ($personas as $persona) {
            $campo_celular = CampoContacto::where('centromedico_id', '=', $centromedico_id)->where('nombre', '=', 'celular')->first();
            $celular = Dato::where('campo_contacto_id', '=', $campo_celular->id)->where('persona_id', '=', $persona->id)->first();
            $celular = ($celular == null) ? '' : $celular->valor ;
            $estado = $persona->usuarios->where('centromedico_id', '=', $centromedico_id)->first()->inboundEstado;
            $distrito = Distrito::find($persona->distrito_id);
            $provincia = $distrito->provincia;
            $departamento = $distrito->departamento;
            array_push($contactos, [
                'id'  => $persona->id,
                'nombre'  => $persona->nombre,
                'apellido'  => $persona->apellido,
                'celular' => $celular,
                'inbound_estado_id' => $estado->id,
                'inbound_estado_nombre' => $estado->nombre,
                'distrito' => $distrito->id,
                'distrito' => $distrito->nombre,
                'provincia' => $provincia->id,
                'provincia' => $provincia->nombre,
                'departamento' => $departamento->id,
                'departamento' => $departamento->nombre,
                'fecha_proxima_donacion' => $persona->fecha_proxima_donacion,
                ]);
        }
        
        array_push($array, $contactos);
        
        return $array;
    }
}
