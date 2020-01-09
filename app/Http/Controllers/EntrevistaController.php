<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entrevista;
use App\EtapasDonacion;

class EntrevistaController extends Controller
{
    /**
     * Crea un registro de una entrevista.
     *
     * @param  mixed $request
     *
     * @return void
     */
    public function crear(Request $request)
    {
        $this->validate($request,[
            'etapa_id'                          =>  'required',
            'manual'                            =>  'required',
            'edad'                              =>  'required',
            'peso'                              =>  'required',
            'ultima_donacion'                   =>  'required',
            'ultima_donacion_descripcion'       =>  'required',
            'medicamentos'                      =>  'required',
            'medicamentos_descripcion'          =>  'required',
            'lista_espera'                      =>  'required',
            'lista_espera_descripcion'          =>  'required',
            'salud'                             =>  'required',
            'deporte'                           =>  'required',
            'enfermedad'                        =>  'required',
            'contacto'                          =>  'required',
            'vacuna'                            =>  'required',
            'vacuna_descripcion'                =>  'required',
            'tatuaje_piercing_accidente'        =>  'required',
            'intervencio_quirurgica'            =>  'required',
            'enfermedad_control'                =>  'required',
            'enfermedad_control_descripcion'    =>  'required',
        ]);

        $entrevista = new Entrevista;
        $entrevista->manual                         =   $request->manual;
        $entrevista->edad                           =   $request->edad;
        $entrevista->peso                           =   $request->peso;
        $entrevista->ultima_donacion                =   $request->ultima_donacion;
        $entrevista->ultima_donacion_descripcion    =   $request->ultima_donacion_descripcion;
        $entrevista->medicamentos                   =   $request->medicamentos;
        $entrevista->medicamentos_descripcion       =   $request->medicamentos_descripcion;
        $entrevista->lista_espera                   =   $request->lista_espera;
        $entrevista->lista_espera_descripcion       =   $request->lista_espera_descripcion;
        $entrevista->salud                          =   $request->salud;
        $entrevista->deporte                        =   $request->deporte;
        $entrevista->enfermedad                     =   $request->enfermedad;
        $entrevista->contacto                       =   $request->contacto;
        $entrevista->vacuna                         =   $request->vacuna;
        $entrevista->vacuna_descripcion             =   $request->vacuna_descripcion;
        $entrevista->tatuaje_piercing_accidente     =   $request->tatuaje_piercing_accidente;
        $entrevista->intervencio_quirurgica         =   $request->intervencio_quirurgica;
        $entrevista->enfermedad_control             =   $request->enfermedad_control;
        $entrevista->enfermedad_control_descripcion =   $request->enfermedad_control_descripcion;
        $entrevista->ultima_regla                   =   $request->ultima_regla;
        $entrevista->ultima_regla_aprox             =   $request->ultima_regla_aprox;
        $entrevista->gestando                       =   $request->gestando;
        $entrevista->lactar                         =   $request->lactar;
        $entrevista->ultimo_parto                   =   $request->ultimo_parto;
        $entrevista->gestaciones                    =   $request->gestaciones;
        $entrevista->save();

        $etapa = EtapasDonacion::find($request->etapa_id);
        $etapa->entrevista_id = $entrevista->id;
        $etapa->save();

        return "Ok";
    }
}
