<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;
use App\Provincia;

class DepartamentoController extends Controller
{
    /**
     * Devuelve todos los departamentos registrados
     *
     * @return App\Departamento $departamentos
     */
    public function getDepartamentos()
    {
        $array = array();

        $departamentos = Departamento::all();

        foreach ($departamentos as $departamento) {
            array_push($array,$departamento);
        }

        $departamentos = $array;

        return $departamentos;
    }

    /**
     * Devuelve todos las provincias de un departamento
     *
     * @param  Request $request
     *
     * @return App\Provincia $provincias
     */
    public function getProvincias(Request $request)
    {
        $departamento_id = $request->get('departamento_id');
        $departamento = Departamento::find($departamento_id);
        $provincias_id = $departamento->provincias->pluck("id")->toArray();
        $provincias = array();
        foreach ($provincias_id as $id) {
            array_push($provincias, Provincia::find($id));
        }
        
        return $provincias;
    }
}
