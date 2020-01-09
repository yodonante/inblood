<?php

use Illuminate\Database\Seeder;
use App\Correo;
use App\Dato;

class CorreosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $correo = new Correo;
        $correo->asunto = 'Prueba';
        $correo->mensaje = 'Esto es una prueba para probar php';
        $correo->save();

        $dato = Dato::find(1);

        $correo->datos()->attach($dato->id);
    }
}
