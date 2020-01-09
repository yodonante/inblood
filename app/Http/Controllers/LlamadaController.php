<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Llamada;
use App\User;
use App\ResultadoLlamada;

use Illuminate\Support\Facades\DB;

class LlamadaController extends Controller
{
    /**
     * Muestra todas las llamadas realizadas.
     *
     * @return \Illuminate\Http\Response
     */
    public function listar()
    {
        $llamadas = Llamada::select( 
            'llamadas.id',
            'llamadas.descripcion',
            'resultado_llamadas.nombre as resultado',
            'datos.valor as telefono',
            'campo_contactos.centromedico_id'
        )
        ->join('resultado_llamadas', 'llamadas.resultado_llamada_id', '=', 'resultado_llamadas.id')
        ->join('datos', 'datos.id', '=', 'llamadas.dato_id')
        ->join('campo_contactos', 'campo_contactos.id', '=', 'datos.campo_contacto_id')
        ->where('campo_contactos.centromedico_id', '=', auth()->user()->centromedico_id)
        ->get();

        return $llamadas;
    }

        /**
     * Muestra todas las llamadas realizadas por una persona.
     *
     * @return \Illuminate\Http\Response
     */
    public function mostrar(Request $request)
    {
        $this->validate($request,[
            'dato_id' => 'required',
        ]);

        $llamadas = Llamada::select( 
            'llamadas.id',
            'llamadas.descripcion',
            'llamadas.fecha',
            'llamadas.hora',
            'llamadas.created_at',
            'llamadas.updated_at',
            'resultado_llamadas.nombre as resultado',
            'resultado_llamadas.id as resultado_id',
            'datos.valor as telefono',
            'campo_contactos.centromedico_id'
        )
        ->join('resultado_llamadas', 'llamadas.resultado_llamada_id', '=', 'resultado_llamadas.id')
        ->join('datos', 'datos.id', '=', 'llamadas.dato_id')
        ->join('campo_contactos', 'campo_contactos.id', '=', 'datos.campo_contacto_id')
        ->where('llamadas.dato_id', '=', $request->dato_id)
        ->get();

        return $llamadas;
    }

    /**
     * Crea una nueva llamada.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function crear(Request $request)
    {
        $this->validate($request,[
            'descripcion' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
            'resultado_llamada_id' => 'required',
            'dato_id' => 'required'
        ]);

        $llamada = new Llamada;

        $llamada->descripcion = $request->descripcion;
        $llamada->fecha = $request->fecha;
        $llamada->hora = $request->hora;
        $llamada->resultado_llamada_id = $request->resultado_llamada_id;
        $llamada->dato_id = $request->dato_id;
        
        $llamada->save();

        return 'Ok';
    }

    /**
     * Edita una llamada.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function editar(Request $request)
    {
        $this->validate($request,[
            'id' => 'required',
            'descripcion' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
            'resultado_llamada_id' => 'required',
            'dato_id' => 'required'
        ]);

        $llamada = Llamada::find($request->id);

        $llamada->descripcion = $request->descripcion;
        $llamada->fecha = $request->fecha;
        $llamada->hora = $request->hora;
        $llamada->resultado_llamada_id = $request->resultado_llamada_id;
        $llamada->dato_id = $request->dato_id;

        $llamada->save();

        return 'Ok';
    }

    /**
     * Elimina una llamada.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function eliminar(Request $request)
    {
        $this->validate($request,[
            'id' => 'required'
        ]);

        Llamada::destroy($request->id);
        return 'Ok';
    }

    /**
     * Devuelve todos los datos de la tabla resultado_llamadas.
     *
     * @return App\ResultadoLlamada
     */
    public function getResultados()
    {
        return ResultadoLlamada::
        select(
            'id',
            'nombre'
        )->get();
    }
}
