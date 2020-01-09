<?php

namespace App\Http\Controllers;

use App\CampoContacto;
use App\User;
use Illuminate\Http\Request;

class CampoContactoController extends Controller
{
    /**
     * Muestra todos los campos de contacto que el centro medico puede usar.
     *
     * @return \Illuminate\Http\Response
     */
    public function listar()
    {
        $centromedico_id = User::find(auth()->id())->centromedico_id;
        $campos = CampoContacto::all()
        ->where('centromedico_id','=', $centromedico_id)
        ;

        return $campos;
    }

    /**
     * Crea nuevos campos para utilizar.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function crear(Request $request)
    {
        $this->validate($request,[
            'nombre'            => 'required',
            'tipo'              => 'required',
            'longitud'          => 'required',
            'tipocontacto_id'   => 'required',
            'centromedico_id'   => 'required'
        ]);

        $campo = new CampoContacto;
        
        $campo->nombre = $request->nombre;
        $campo->tipo = $request->tipo;
        $campo->longitud = $request->longitud;
        $campo->tipodato_id = $request->tipodato_id;
        $campo->tipocontacto_id = $request->tipocontacto_id;
        $campo->centromedico_id = User::find(auth()->id())->centromedico_id;

        $campo->save();

        return 'Ok';
    }

    /**
     * Edita un campo de contacto.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function editar(Request $request)
    {
        $this->validate($request,[
            'id'                => 'required',
            'nombre'            => 'required',
            'tipo'              => 'required',
            'longitud'          => 'required',
            'tipodato_id'       => 'required',
            'tipocontacto_id'   => 'required'
        ]);

        $campo = CampoContacto::find($request->id);
        
        $campo->nombre = $request->nombre;
        $campo->tipo = $request->tipo;
        $campo->longitud = $request->longitud;
        $campo->tipodato_id = $request->tipodato_id;
        $campo->tipocontacto_id = $request->tipocontacto_id;

        $campo->save();

        return 'Ok';
    }

    /**
     * Elimina campos
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function eliminar(Request $request)
    {
        $this->validate($request,[
            'id' => 'required'
        ]);

        CampoContacto::destroy($request->id);
        return 'OK';
    }
}
