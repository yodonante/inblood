<?php

namespace App\Http\Controllers;

use App\Tarea;
use App\User;
use App\Persona;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Muestra una lista de las tareas que el centro medico posee.
     *
     * @return App\Tarea $tareas
     */
    public function listar($filtro = null)
    {
        $tareas = Tarea::select('tareas.id', 'tareas.nombre', 'tareas.descripcion', 'tareas.vencimiento', 'tareas.estado', 'tareas.centromedico_id')
        ->when($filtro, function ($query, $filtro) {
            $usuario = User::find(auth()->id());
            $centromedico_id = $usuario->centromedico_id;
            $persona_id = $usuario->persona_id;
            if ($filtro == 'persona') {
                return $query
                ->leftJoin('persona_tarea', 'persona_tarea.tarea_id', '=', 'tareas.id')
                ->leftJoin('personas', 'persona_tarea.persona_id', '=', 'personas.id')
                ->where('personas.id', '=', $persona_id);
            } elseif ($filtro == 'centromedico') {
                return $query->where('tareas.centromedico_id', '=', $centromedico_id);
            }
        })
        ->get();

        return $tareas;
    }

    /**
     * Crea y gruarda una nueva tarea.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return String 'Ok'
     */
    public function crear(Request $request)
    {
        $this->validate($request,[
            'nombre' => 'required',
            'descripcion' => 'required',
            'vencimiento' => 'required|date',
            'estado' => 'required',
            //'personas' => 'required',
        ]);

        $tarea = new Tarea;
        $tarea->nombre = $request->nombre;
        $tarea->descripcion = $request->descripcion;
        $tarea->vencimiento = $request->vencimiento;
        $tarea->estado = $request->estado;
        $tarea->centromedico_id = User::find(auth()->id())->centromedico_id;
        $tarea->save();

        // if ($request->personas) {
        //     $tarea->personas()->attach($request->personas);
        // }

        //Para que se enlace sólo consigo mismo una tarea
        $persona = Persona::find(User::find(auth()->id())->persona_id);
        $tarea->personas()->attach($persona);

        return 'Ok';
    }

    /**
     * Edita una tarea recibiendo el id de la tarea y sus datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return String 'Ok'
     */
    public function editar(Request $request)
    {
        $this->validate($request,[
            'id' => 'required',
            'nombre' => 'required',
            'descripcion' => 'required',
            'vencimiento' => 'required|date',
            'estado' => 'required',
            //'personas' => 'required',
        ]);

        $tarea = Tarea::find($request->id);
        $tarea->nombre = $request->nombre;
        $tarea->descripcion = $request->descripcion;
        $tarea->vencimiento = $request->vencimiento;
        $tarea->estado = $request->estado;
        $tarea->centromedico_id = User::find(auth()->id())->centromedico_id;
        $tarea->save();

        // $tarea->personas()->detach;
        // if ($request->personas) {
        //     $tarea->personas()->attach($request->personas);
        // }

        return 'Ok';
    }

    /**
     * Elimina la tarea de la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return String 'Ok'
     */
    public function eliminar(Request  $request)
    {
        $id = $request->id;
        $tarea = Tarea::find($id);

        $tarea->delete();
        return 'Ok';
    }

    /**
     * Lista por personas.
     *
     * @param  mixed $request
     *
     * @return void
     */
    public function mostrarPorPersona()
    {
        return $this->listar('persona');
    }

    /**
     * Lista por Centro Médico.
     *
     * @param  mixed $request
     *
     * @return void
     */
    public function mostrarPorCentroMedico()
    {
        return $this->listar('centromedico');
    }
}
