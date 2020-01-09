<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provincia;
use App\Distrito;

class ProvinciaController extends Controller
{
    /**
     * Devuelve los distritos de una provincia
     *
     * @param  Request $request
     *
     * @return App\Distrito $distritos
     */
    public function getDistritos(Request $request)
    {
        $provincia_id = $request->get('provincia_id');
        $provincia = Provincia::find($provincia_id);

        $distritos_id = $provincia->distritos->pluck("id")->toArray();
        $distritos = array();
        foreach ($distritos_id as $id) {
            array_push($distritos, Distrito::find($id));
        }
        
        return $distritos;
    }
}
