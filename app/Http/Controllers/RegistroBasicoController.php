<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegistroBasico;
use App\EtapasDonacion;

class RegistroBasicoController extends Controller
{
    /**
     * Crea un registro de información básica.
     *
     * @param  mixed $request
     *
     * @return void
     */
    public function crear(Request $request)
    {
        $this->validate($request,[
            'etapa_id'          => 'required',
            'nombres'           => 'required',
            'apellidos'         => 'required',
            'edad'              => 'required',
            'sexo'              => 'required',
            'correo'            => 'required',
            'lugarNacimiento'   => 'required',
            'fechaNacimiento'   => 'required',
            'estadoCivil'       => 'required',
            'domicilio'         => 'required',
            'distrito_id'       => 'required',
            'provincia_id'      => 'required',
            'departamento_id'   => 'required',
            'ocupacion'         => 'required',
            'lugarTrabajo'      => 'required',
            'celular'           => 'required',
            'telefono'          => 'required',
            'viajes'            => 'required',
            'permanencia'       => 'required',
        ]);

        $registro                   = new RegistroBasico;
        $registro->nombres          = $request->nombres;
        $registro->apellidos        = $request->apellidos;
        $registro->edad             = $request->edad;
        $registro->sexo             = $request->sexo;
        $registro->correo           = $request->correo;
        $registro->lugarNacimiento  = $request->lugarNacimiento;
        $registro->fechaNacimiento  = $request->fechaNacimiento;
        $registro->procedencia      = $request->lugarNacimiento;
        $registro->estadoCivil      = $request->estadoCivil;
        $registro->domicilio        = $request->domicilio;
        $registro->distrito_id      = $request->distrito_id;
        $registro->provincia_id     = $request->provincia_id;
        $registro->departamento_id  = $request->departamento_id;
        $registro->ocupacion        = $request->ocupacion;
        $registro->lugarTrabajo     = $request->lugarTrabajo;
        $registro->celular          = $request->celular;
        $registro->telefono         = $request->telefono;
        $registro->viajes           = $request->viajes;
        $registro->permanencia      = $request->permanencia;
        $registro->comentarios      = $request->comentarios;
        $registro->save();

        $etapa = EtapasDonacion::find($request->etapa_id);
        $etapa->registro_basico_id = $registro->id;
        $etapa->save();

        return "Ok";
    }
}
