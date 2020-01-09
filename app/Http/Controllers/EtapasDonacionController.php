<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EtapasDonacion;

class EtapasDonacionController extends Controller
{
    /**
     * Crea una entidad etapa para el proceso de donación.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function crear(Request $request)
    {
        $this->validate($request,[
            'persona_id' => 'required',
            'fecha' => 'required',
            'responsable' => 'required',
            'carta_notarial' => 'required',
            'tipo_donacion' => 'required',
        ]);

        $etapa = new EtapasDonacion;
        $etapa->fecha = $request->fecha;
        $etapa->responsable = $request->responsable;
        $etapa->carta_notarial = $request->carta_notarial;
        $etapa->tipo_donacion = $request->tipo_donacion;
        $etapa->persona_id = $request->persona_id;
        $etapa->centromedico_id = auth()->user()->centromedico_id;

        $etapa->save();

        return [$etapa->id,'Ok'];
    }

    /**
     * Muestra las donaciones en todas sus etapas.
     *
     * @param  mixed $request
     *
     * @return void
     */
    public function mostrarPorPersona(Resquest $request)
    {
        $this->validate($request,[
            'persona_id' => 'required',
        ]);

        $donaciones =  EtapasDonacion::where('persona_id', '=', $request->persona_id)
                        ->where('centromedico_id', '=', auth()->user()->centromedico_id)
                        ->join('registro_basicos', 'registro_basicos.id', '=', 'persona_id.registro_basico_id')
                        ->join('examen_fisicos', 'examen_fisicos.id', '=', 'persona_id.examen_fisico_id')
                        ->join('hemograma_id', 'hemograma_id.id', '=', 'persona_id.hemograma_id')
                        ->join('entrevistas', 'entrevistas.id', '=', 'persona_id.entrevista_id')
                        ->join('donacions', 'donacions.id', '=', 'persona_id.donacion_id')
                        ->join('donacions', 'etapas_donacion.donacion_id', '=', 'donacions.id')
        ->gets();
        return $donaciones;
    }
}
