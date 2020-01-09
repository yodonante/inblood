<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donacion;
use App\EtapasDonacion;

class DonacionController extends Controller
{
    /**
     * Crea un registro de donacion.
     *
     * @param  mixed $request
     *
     * @return void
     */
    public function crear(Request $request)
    {
        $this->validate($request,[
            'etapa_id'                  =>  'required',
            'numero_bolsa'              =>  'required',
            'numero_tubo'               =>  'required',
            'lesiones'                  =>  'required',
            'lesiones_descripcion'      =>  'required',
            'venopunsiones'             =>  'required',
            'venopunsiones_descripcion' =>  'required',
            'volumen'                   =>  'required',
            'tiempo'                    =>  'required',
            'otros'                     =>  'required',
            'eritrocitos'               =>  'required',
            'fecha_eritrocitos'         =>  'required',
            'leucocitos'                =>  'required',
            'fecha_leucocitos'          =>  'required',
            'plaquetas'                 =>  'required',
            'fecha_plaquetas'           =>  'required',
            'plasma'                    =>  'required',
            'fecha_plasma'              =>  'required',
            'proxima_donacion'          =>  'required',
        ]);

        $donacion = new Donacion;
        $donacion->numero_bolsa                 =   $request->numero_bolsa;
        $donacion->numero_tubo                  =   $request->numero_tubo;
        $donacion->lesiones                     =   $request->lesiones;
        $donacion->lesiones_descripcion         =   $request->lesiones_descripcion;
        $donacion->venopunsiones                =   $request->venopunsiones;
        $donacion->venopunsiones_descripcion    =   $request->venopunsiones_descripcion;
        $donacion->volumen                      =   $request->volumen;
        $donacion->tiempo                       =   $request->tiempo;
        $donacion->reaccion_adversa_id                   =   $request->reaccion_adversa_id;
        $donacion->otros                        =   $request->otros;
        $donacion->eritrocitos                  =   $request->eritrocitos;
        $donacion->fecha_eritrocitos            =   $request->fecha_eritrocitos;
        $donacion->leucocitos                   =   $request->leucocitos;
        $donacion->fecha_leucocitos             =   $request->fecha_leucocitos;
        $donacion->plaquetas                    =   $request->plaquetas;
        $donacion->fecha_plaquetas              =   $request->fecha_plaquetas;
        $donacion->plasma                       =   $request->plasma;
        $donacion->fecha_plasma                 =   $request->fecha_plasma;
        $donacion->proxima_donacion             =   $request->proxima_donacion;
        $donacion->save();

        $etapa = EtapasDonacion::find($request->etapa_id);
        $etapa->donacion_id = $donacion->id;
        $etapa->save();

        return "Ok";
    }
}
