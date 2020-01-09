<?php

use Illuminate\Database\Seeder;
use App\Dato;
use App\Persona;

class DatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $correo_id = 1;
        $celular_id = 2;

        $persona = Persona::find(1);

        $dato = new Dato;
        $dato->valor = 'correo@ejemplo.com';
        $dato->campo_contacto_id = $correo_id;
        $dato->persona_id = 1;
        $dato->save();
        
        $dato = new Dato;
        $dato->valor = '969351478';
        $dato->campo_contacto_id = $celular_id;
        $dato->persona_id = 1;
        $dato->save();
    }
}
