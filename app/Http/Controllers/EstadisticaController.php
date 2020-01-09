<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Donacion;
use App\InboundEstado;
use App\Tiposangre;
use App\Tarea;
use Carbon\Carbon;
use Dompdf\Dompdf;

class EstadisticaController extends Controller
{
    /**
     * Muestra la cantidad de donantes en el centro médico.
     *
     * @return void
     */
    public function donantes()
    {
        $donantes = User::where('centromedico_id', '=', auth()->user()->centromedico_id)
        ->join('model_has_roles', 'model_has_roles.model_id', '=', 'users.id')
        ->where('model_has_roles.role_id', '=', 4)
        ->count();
        return $donantes;
    }

    /**
     * Muestra la cantidad de donaciones que hubieron en los ultimos 7 días.
     *
     * @return void
     */
    public function donaciones()
    {
        $donaciones = Donacion::join('etapas_donacions', 'etapas_donacions.donacion_id', '=', 'donacions.id')
        ->where('etapas_donacions.centromedico_id', '=', auth()->user()->centromedico_id)
        ->whereBetween('donacions.created_at', [Carbon::now()->subDays(7), Carbon::now()])
        ->count();

        return $donaciones;
    }

    /**
     * Muestra cuantas donaciones hubieron en cada día de la ultima semana.
     *
     * @return void
     */
    public function donacionesPorDia()
    {
        $array = [];
        for ($dia=7; $dia > 0; $dia--) {
            $cantidad = Donacion::join('etapas_donacions', 'etapas_donacions.donacion_id', '=', 'donacions.id')
            ->where('etapas_donacions.centromedico_id', '=', auth()->user()->centromedico_id)
            ->whereBetween('donacions.created_at', [Carbon::now()->subDays($dia), Carbon::now()->subDays($dia-1)])
            ->count(); 
            $obj = (object) array(  'dia' => Carbon::now()->subDays($dia-1),
                                    'cantidadDonaciones'    => $cantidad
            );
            array_push($array, $obj);
        }

        return $array;
    }

    /**
     * Muestra cuantas donantes hubieron en cada día de la ultima semana.
     *
     * @return void
     */
    public function donantesPorDia()
    {
        $array = [];
        for ($dia=7; $dia > 0; $dia--) {
            $donantes = User::where('centromedico_id', '=', auth()->user()->centromedico_id)
            ->join('model_has_roles', 'model_has_roles.model_id', '=', 'users.id')
            ->where('model_has_roles.role_id', '=', 4)
            ->whereBetween('users.created_at', [Carbon::now()->subDays($dia), Carbon::now()->subDays($dia-1)])
            ->count(); 
            $obj = (object) array(  'dia' => Carbon::now()->subDays($dia-1),
                                    'cantidadDonantes'    => $donantes
            );
            array_push($array, $obj);
        }

        return $array;
    }

    /**
     * Muestra la cantidad de donantes por etapa de Inbound.
     *
     * @return void
     */
    public function donantesPorEtapaInbound()
    {
        $array = [];
        for ($id=1; $id < 5; $id++) {
            $donantes = User::where('centromedico_id', '=', auth()->user()->centromedico_id)
            ->join('model_has_roles', 'model_has_roles.model_id', '=', 'users.id')
            ->where('model_has_roles.role_id', '=', 4)
            ->where('users.inbound_estado_id', '=', $id)
            ->count(); 
            $obj = (object) array(  'etapa'             => InboundEstado::find($id)->nombre,
                                    'cantidadDonantes'  => $donantes
            );
            array_push($array, $obj);
        }

        return $array;
    }

    /**
     * Muestra la cantidad de donantes por tipo de sangre.
     *
     * @return void
     */
    public function donantesPorTipoSangre()
    {
        $array = [];
        for ($id=1; $id < 10; $id++) {
            $donantes = User::where('centromedico_id', '=', auth()->user()->centromedico_id)
            ->join('model_has_roles', 'model_has_roles.model_id', '=', 'users.id')
            ->join('personas', 'personas.id', '=', 'users.persona_id')
            ->where('model_has_roles.role_id', '=', 4)
            ->where('personas.tiposangre_id', '=', $id)
            ->count(); 
            $obj = (object) array(  'tipoSangre'        => Tiposangre::find($id)->nombre,
                                    'cantidadDonantes'  => $donantes
            );
            array_push($array, $obj);
        }

        return $array;
    }

    /**
     * Muestra el promedio de los valores obtenidos de la diferencia de la fecha en la que se creó el donante y la fecha en la que realizó su primera donación.
     *
     * @return void
     */
    public function promedioTiempoParaDonacion()
    {
        $usuarios = User::where('users.centromedico_id', '=', auth()->user()->centromedico_id)
        ->select('id')
        ->get();

        $tiempos = [];
        foreach ($usuarios as $key => $value) {
            $user = User::find($value->id);
            $registro = $user->created_at;
            $donacion =  $user->persona->etapasdonacion()->first();
            if ($donacion != null) {
                $donacion = $donacion->donacion()->first();
                if ($donacion != null) {
                    $donacion = $donacion->created_at;
                    $dias = $donacion->diffInDays($registro);
                    array_push($tiempos, $dias);
                }
            }
        }
        
        $dias = 0;
        $cantidad = 0;
        foreach ($tiempos as $dia) {
            $dias = $dias + $dia;
            $cantidad++;
        }
        $promedio = 0;
        if ($cantidad > 0) {
            $promedio = $dias/$cantidad;
        }
        return $promedio;
    }

    /**
     * Genera un PDF con las tareas del centro médico.
     *
     * @param  mixed $request
     *
     * @return void
     */
    public function tareasPDF()
    {
        $tareas = Tarea::where('centromedico_id', '=', auth()->user()->centromedico_id)->get();
        $view = view('tareas', ['tareas'=> $tareas]);
        $dompdf = new Dompdf();
        $dompdf->loadHtml($view);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();
    }
}
