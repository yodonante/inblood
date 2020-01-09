<?php

use Illuminate\Database\Seeder;
use App\InboundEstado;

class InboundEstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estado = new InboundEstado;
        $estado->nombre = 'Lead';
        $estado->save();

        $estado = new InboundEstado;
        $estado->nombre = 'Nutrición';
        $estado->save();

        $estado = new InboundEstado;
        $estado->nombre = 'Donante';
        $estado->save();
        
        $estado = new InboundEstado;
        $estado->nombre = 'Donante constante';
        $estado->save();
    }
}
