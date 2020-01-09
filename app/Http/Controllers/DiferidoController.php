<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diferido;
use App\EtapasDonacion;

class DiferidoController extends Controller
{
    /**
     * Crea un registro de diferido.
     *
     * @param  mixed $request
     *
     * @return void
     */
    public function crear(Request $request)
    {
        $this->validate($request,[
            'etapa_id'      =>  'required',
            'permanente'    =>  'required',
            'disponible'    =>  'required',
            'motivo'        =>  'required',
        ]);

        $diferido = new Diferido;
        $diferido->permanente=$request->permanente;
        $diferido->disponible=$request->disponible;
        $diferido->motivo=$request->motivo;
        $diferido->save();

        $etapa = EtapasDonacion::find($request->etapa_id);
        $etapa->examen_fisico_id = $examen->id;
        $etapa->save();

        return "Ok";
    }
}
