<?php

namespace App\Http\Controllers;

use App\Dato;
use App\User;
use App\CampoContacto;
use Illuminate\Http\Request;

class DatoController extends Controller
{
    /**
     * Muestra todos los datos de contacto.
     *
     * @return \Illuminate\Http\Response
     */
    public function listar()
    {
        $centromedico_id = User::find(auth()->id())->centromedico_id;
        $datos = Dato::join('personas','personas.id','=','datos.persona_id')
        ->join('campo_contactos', 'campo_contactos.id', '=', 'datos.id')
        ->where('campo_contactos.centromedico_id','=', $centromedico_id)
        ->select(
            'campo_contactos.nombre AS campo',
            'datos.valor AS dato',
            'personas.id',
            'personas.dni',
            'personas.nombre',
            'personas.apellido'
        )->orderBy('personas.id')
        ->get();

        return $datos;
    }

    /**
     * Crea un nuevo dato de contacto.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function crear(Request $request)
    {
        $this->validate($request,[
            'campo_contacto_id' => 'required',
            'valor' => 'required' . 
                        CampoContacto::find($request->campo_contacto_id)
                        ->tipocontacto->nombre = ('correo') ? '|email' : 
                        CampoContacto::find($request->campo_contacto_id)
                        ->tipocontacto->nombre = ('telefono') ? 'numeric' : '' ,
            'persona_id' => 'required'
        ]);
        $dato = new Dato;

        $dato->valor = $request->valor;
        $dato->campo_contacto_id = $request->campo_contacto_id;
        $dato->persona_id = $request->persona_id;

        $dato->save();

        return 'Ok';
    }

    /**
     * Edita un dato de contacto
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function editar(Request $request)
    {
        $this->validate($request,[
            'id'                => 'required',
            'campo_contacto_id' => 'required',
            'valor' => 'required' . 
                        CampoContacto::find($request->campo_contacto_id)
                        ->tipocontacto->nombre = ('correo') ? '|email' : 
                        CampoContacto::find($request->campo_contacto_id)
                        ->tipocontacto->nombre = ('telefono') ? 'numeric' : '' ,
            'persona_id' => 'required'
        ]);

        $dato = Dato::find($request->id);

        $dato->valor = $request->valor;
        $dato->campo_contacto_id = $request->campo_contacto_id;
        $dato->persona_id = $request->persona_id;

        $dato->save();

        return 'Ok';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function eliminar(Request $request)
    {
        $this->validate($request,[
            'id' => 'required'
        ]);

        Dato::destroy($request->id);
        return 'OK';
    }
}
