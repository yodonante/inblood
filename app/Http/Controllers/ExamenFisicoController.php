<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EtapasDonacion;
use App\ExamenFisico;

class ExamenFisicoController extends Controller
{
    /**
     * Crea un registro de examen físico.
     *
     * @return void
     */
    public function crear(Request $request)
    {
        $this->validate($request,[
            'etapa_id'  => 'required',
            'peso'      => 'required',
            'pulso'     => 'required',
            'talla'     => 'required',
            'presion'   => 'required',
            'brazos'    => 'required',
        ]);

        $examen = new ExamenFisico;

        $examen->peso           = $request->peso;
        $examen->pulso          = $request->pulso;
        $examen->talla          = $request->talla;
        $examen->presion        = $request->presion;
        $examen->brazos         = $request->brazos;
        $examen->comentarios    = $request->comentarios;

        $examen->save();

        $etapa = EtapasDonacion::find($request->etapa_id);
        $etapa->examen_fisico_id = $examen->id;
        $etapa->save();

        return "Ok";
    }
}
