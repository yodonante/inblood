<?php

namespace App\Http\Controllers;

use App\Mail\TestShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Correo;
use App\Dato;

class MailController extends Controller
{
    /**
     * Muestra los correos que se han enviado a cierto contacto.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return App\Correo $correos
     */
    public function listar(Request $request)
    {
        request()->validate([
            'contacto_id' => 'required' #Id del dato
        ]);

        $contacto_id = $request->contacto_id;

        $correos = Correo::select('correos.created_at','correos.asunto','correos.mensaje','correos.id')->join(
            'correo_dato', 'correos.id', '=', 'correo_dato.correo_id'
        )->where(
            'correo_dato.dato_id', '=', $contacto_id
        )->get();

        return $correos;

    }

    /**
     * Envia y almacena correos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function enviar(Request $request)
    {
        $msg = request()->validate([
            'nombre' => 'required',
            'contactos' => 'required', # Array de correos
            'asunto' => 'required',
            'mensaje' => 'required',
            //'fechaVencimiento' => 'required|date'
            ]);
        
            
        $destinatarios = $request->contactos;
        
        Mail::to($destinatarios)->queue(new TestShipped($msg));
        
        $correo = new Correo;
        $correo->asunto = $request->asunto;
        $correo->mensaje = $request->mensaje;
        $correo->save();
        // foreach ($request->contactos as $contacto) {
            $contacto_id = Dato::where('valor', '=', $destinatarios)->first()->id;
            $correo->datos()->attach($contacto_id);
            // }
        return "Ok";
            
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
        
        $correo = Correo::find($request->id);
        $correo->datos()->detach();
        Correo::destroy($request->id);
        return 'Ok';
    }
}
