<?php

use Illuminate\Database\Seeder;
use App\ResultadoLLamada;

class ResultadoLlamadasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resultado = new ResultadoLlamada;
        $resultado->nombre = 'Sin respuesta';
        $resultado->save();
        
        $resultado = new ResultadoLlamada;
        $resultado->nombre = 'Ocupado';
        $resultado->save();
        
        $resultado = new ResultadoLlamada;
        $resultado->nombre = 'Número equivocado';
        $resultado->save();
        
        $resultado = new ResultadoLlamada;
        $resultado->nombre = 'Se dejó un mensaje directo';
        $resultado->save();
        
        $resultado = new ResultadoLlamada;
        $resultado->nombre = 'Se dejó un mensaje de voz';
        $resultado->save();
        
        $resultado = new ResultadoLlamada;
        $resultado->nombre = 'Conectado';
        $resultado->save();

    }
}
