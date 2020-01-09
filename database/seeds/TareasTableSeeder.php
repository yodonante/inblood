<?php

use Illuminate\Database\Seeder;
use App\Tarea;
use Carbon\Carbon;

class TareasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tarea = new Tarea;
        $tarea->nombre = 'Llamar';
        $tarea->descripcion = 'Contactar el dia xx del xx';
        $tarea->vencimiento = Carbon::now()->addDays(23);
        $tarea->estado = 0;
        $tarea->centromedico_id = 1;
        $tarea->save();
        
        $tarea = new Tarea;
        $tarea->nombre = 'Correo a y';
        $tarea->descripcion = 'Contactar el dia xx del xx';
        $tarea->vencimiento = Carbon::now()->subDays(1);
        $tarea->estado = 1;
        $tarea->centromedico_id = 1;
        $tarea->save();
    }
}
