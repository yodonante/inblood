<?php

use Illuminate\Database\Seeder;
use App\EstadoEtapa;

class EstadoEtapasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estado = new EstadoEtapa;
        $estado->nombre = "Abierto";
        $estado->save();
        
        $estado = new EstadoEtapa;
        $estado->nombre = "En Proceso";
        $estado->save();
        
        $estado = new EstadoEtapa;
        $estado->nombre = "Cerrado";
        $estado->save();
        
        $estado = new EstadoEtapa;
        $estado->nombre = "Cancelado";
        $estado->save();
        
    }
}
