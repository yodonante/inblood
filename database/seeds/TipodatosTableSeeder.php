<?php

use Illuminate\Database\Seeder;
use App\Tipodato;

class TipodatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo = new Tipodato;
        $tipo->nombre = 'varchar';
        $tipo->save();
        
        $tipo = new Tipodato;
        $tipo->nombre = 'longtext';
        $tipo->save();
        
        $tipo = new Tipodato;
        $tipo->nombre = 'integer';
        $tipo->save();
        
        $tipo = new Tipodato;
        $tipo->nombre = 'date';
        $tipo->save();
        
        $tipo = new Tipodato;
        $tipo->nombre = 'time';
        $tipo->save();
    }
}
