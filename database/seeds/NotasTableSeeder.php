<?php

use Illuminate\Database\Seeder;
use App\Nota;

class NotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nota = new Nota;
        $nota->descripcion = 'Lorem';
        $nota->persona_id = '1';
        $nota->centromedico_id = '1';
        $nota->save();
    }
}
