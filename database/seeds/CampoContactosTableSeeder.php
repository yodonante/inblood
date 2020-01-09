<?php

use Illuminate\Database\Seeder;
use App\CampoContacto;

class CampoContactosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campoContacto= new CampoContacto;
        $campoContacto->nombre="correo";
        $campoContacto->longitud="256";
        $campoContacto->centromedico_id="1";
        $campoContacto->tipodato_id="1";
        $campoContacto->tipocontacto_id="1";
        $campoContacto->save();

        $campoContacto= new CampoContacto;
        $campoContacto->nombre="celular";
        $campoContacto->longitud="9";
        $campoContacto->centromedico_id="1";
        $campoContacto->tipodato_id="1";
        $campoContacto->tipocontacto_id="2";
        $campoContacto->save();
    }
}
