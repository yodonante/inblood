<?php

use Illuminate\Database\Seeder;
use App\Centromedico;

class CentroMedicosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $centromedico = new Centromedico;
        $centromedico->nombre = 'yodonante';
        $centromedico->dominio_correo = 'yodonante.com';
        $centromedico->save();
    }
}
