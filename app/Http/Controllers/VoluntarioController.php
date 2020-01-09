<?php

namespace App\Http\Controllers;

use App\Voluntario;
use Illuminate\Http\Request;

class VoluntarioController extends Controller
{
    public function home()
    {
        return view('voluntarios.registro');
    }

    public function crear(Request $request)
    {
        $request->validate([
            'nombre'        => 'required',
            'apellido'      => 'required',
            'email'         => 'required',
            'celular'       => 'required',
        ]);
        $voluntario = Voluntario::where('email', '=', $request->email)->get();
        if (sizeOf($voluntario) == 0) {
            $voluntario = new Voluntario();
            $voluntario->nombre = $request->nombre;
            $voluntario->apellido = $request->apellido;
            $voluntario->email = $request->email;
            $voluntario->celular = $request->celular;
            $voluntario->save();
            return 'Ok';
        }else{
            return 'Ya existe';
        }
    }
}
