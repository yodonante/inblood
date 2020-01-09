<?php

use Illuminate\Database\Seeder;
use App\Llamada;
use Carbon\Carbon;

class LlamadasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $llamada = new Llamada;
        $llamada->descripcion = "Lorem";
        $date = Carbon::now();
        $llamada->fecha = $date->isoFormat('YYYY-MM-DD');
        $llamada->hora = $date->isoFormat('HH:mm');
        $llamada->resultado_llamada_id = 1;
        $llamada->dato_id = 1;

        $llamada->save();
    }
}
