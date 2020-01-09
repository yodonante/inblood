<?php

use Illuminate\Database\Seeder;
use App\Tipocontacto;

class TipocontactosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo = new Tipocontacto;
        $tipo->nombre = 'correo';
        $tipo->save();
        
        $tipo = new Tipocontacto;
        $tipo->nombre = 'telefono';
        $tipo->save();

    }
}
