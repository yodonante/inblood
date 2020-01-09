<?php

use Illuminate\Database\Seeder;
use App\Persona;
use Carbon\Carbon;

class PersonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Persona::truncate();

        $persona= new Persona;
        $persona->dni="00000001";
        $persona->nombre="Jhonatan";
        $persona->apellido="Malara";
        $persona->fechaNacimiento=Carbon::now()->subYears(23);
        $persona->sexo="1";
        $persona->fecha_ultima_donacion = Carbon::now();
        $persona->fecha_proxima_donacion = Carbon::now();
        $persona->tiposangre_id="9";
        $persona->distrito_id="200101";
        $persona->save();

        $persona= new Persona;
        $persona->dni="00000002";
        $persona->nombre="Felipe";
        $persona->apellido="Benites";
        $persona->fechaNacimiento=Carbon::now()->subYears(24);
        $persona->sexo="1";
        $persona->fecha_ultima_donacion = Carbon::now();
        $persona->fecha_proxima_donacion = Carbon::now();
        $persona->tiposangre_id="9";
        $persona->distrito_id="200101";
        $persona->save();

        $persona= new Persona;
        $persona->dni="00000003";
        $persona->nombre="Gustavo";
        $persona->apellido="Farro";
        $persona->fechaNacimiento=Carbon::now()->subYears(27);
        $persona->sexo="1";
        $persona->fecha_ultima_donacion = Carbon::now();
        $persona->fecha_proxima_donacion = Carbon::now();
        $persona->tiposangre_id="9";
        $persona->distrito_id="200101";
        $persona->save();

        $persona= new Persona;
        $persona->dni="00000004";
        $persona->nombre="Claudia";
        $persona->apellido="Horna";
        $persona->fechaNacimiento=Carbon::now()->subYears(22);
        $persona->sexo="0";
        $persona->fecha_ultima_donacion = Carbon::now();
        $persona->fecha_proxima_donacion = Carbon::now();
        $persona->tiposangre_id="9";
        $persona->distrito_id="200101";
        $persona->save();

        $persona= new Persona;
        $persona->dni="00000005";
        $persona->nombre="Marcos";
        $persona->apellido="Chuquicondor";
        $persona->fechaNacimiento=Carbon::now()->subYears(21);
        $persona->sexo="1";
        $persona->fecha_ultima_donacion = Carbon::now();
        $persona->fecha_proxima_donacion = Carbon::now();
        $persona->tiposangre_id="9";
        $persona->distrito_id="200101";
        $persona->save();

        $persona= new Persona;
        $persona->dni="00000006";
        $persona->nombre="Fernanda";
        $persona->apellido="Bodero";
        $persona->fechaNacimiento=Carbon::now()->subYears(20);
        $persona->sexo="0";
        $persona->fecha_ultima_donacion = Carbon::now();
        $persona->fecha_proxima_donacion = Carbon::now();
        $persona->tiposangre_id="9";
        $persona->distrito_id="200101";
        $persona->save();

        $persona= new Persona;
        $persona->dni="00000007";
        $persona->nombre="Edwin";
        $persona->apellido="Flores";
        $persona->fechaNacimiento=Carbon::now()->subYears(21);
        $persona->sexo="0";
        $persona->fecha_ultima_donacion = Carbon::now();
        $persona->fecha_proxima_donacion = Carbon::now();
        $persona->tiposangre_id="9";
        $persona->distrito_id="200101";
        $persona->save();

        $persona= new Persona;
        $persona->dni="28479845";
        $persona->nombre="Penélope Susana";
        $persona->apellido="Sánchez Quispe";
        $persona->fechaNacimiento=Carbon::now()->subYears(19);
        $persona->sexo="0";
        $persona->fecha_ultima_donacion = Carbon::now();
        $persona->fecha_proxima_donacion = Carbon::now();
        $persona->tiposangre_id="1";
        $persona->distrito_id="200101";
        $persona->save();

        $persona= new Persona;
        $persona->nombre="Nuria Alejandra";
        $persona->dni="75986314";
        $persona->apellido="Otero Díaz";
        $persona->fechaNacimiento=Carbon::now()->subYears(21);
        $persona->sexo="0";
        $persona->fecha_ultima_donacion = Carbon::now();
        $persona->fecha_proxima_donacion = Carbon::now();
        $persona->tiposangre_id="4";
        $persona->distrito_id="200101";
        $persona->save();

        $persona= new Persona;
        $persona->nombre="Sebastián Julián";
        $persona->dni="72245905";
        $persona->apellido="Reyes Tello";
        $persona->fechaNacimiento=Carbon::now()->subYears(24);
        $persona->sexo="1";
        $persona->fecha_ultima_donacion = Carbon::now();
        $persona->fecha_proxima_donacion = Carbon::now();
        $persona->tiposangre_id="5";
        $persona->distrito_id="200101";
        $persona->save();
    }
}
