<?php

namespace App\Http\Controllers;

use App\Nota;
use App\User;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    /**
     * Muestra todas las notas del centro medico.
     *
     * @return \Illuminate\Http\Response
     */
    public function listar()
    {
        $centromedico_id = User::find(auth()->id())->centromedico_id;
        $notas = Nota::all()->where('centromedico_id', '=', $centromedico_id);

        return $notas;
    }

    /**
     * Muestra todas las notas del centro medico.
     *
     * @return \Illuminate\Http\Response
     */
    public function mostrar(Request $request)
    {
        $this->validate($request,[
            'persona_id' => 'required',
        ]);
        $centromedico_id = User::find(auth()->id())->centromedico_id;
        $notas = Nota::all()->where('persona_id', '=', $request->persona_id)->where('centromedico_id', '=', $centromedico_id);

        return $notas;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function crear(Request $request)
    {
        $this->validate($request,[
            'descripcion' => 'required',
            'persona_id' => 'required',
        ]);
        
        $nota = new Nota;
        $nota->descripcion = $request->descripcion;
        $nota->persona_id = $request->persona_id;
        $nota->centromedico_id = User::find(auth()->id())->centromedico_id;
        $nota->save();

        return "Ok";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function editar(Request $request)
    {
        $this->validate($request,[
            'id' => 'required',
            'descripcion' => 'required',
        ]);
        
        $nota = Nota::find($request->id);
        $nota->descripcion = $request->descripcion;
        $nota->save();

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

        Nota::destroy($request->id);
        return 'Ok';
    }
}
