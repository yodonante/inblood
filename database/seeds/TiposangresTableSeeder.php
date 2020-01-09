<?php

use Illuminate\Database\Seeder;
use App\Tiposangre;

class TipoSangresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tiposangre::truncate();

        $tipoSangre= new Tiposangre;
        $tipoSangre->nombre="A+";
        $tipoSangre->save();

        $tipoSangre= new Tiposangre;
        $tipoSangre->nombre="A-";
        $tipoSangre->save();

        $tipoSangre= new Tiposangre;
        $tipoSangre->nombre="B+";
        $tipoSangre->save();

        $tipoSangre= new Tiposangre;
        $tipoSangre->nombre="B-";
        $tipoSangre->save();

        $tipoSangre= new Tiposangre;
        $tipoSangre->nombre="AB+";
        $tipoSangre->save();

        $tipoSangre= new Tiposangre;
        $tipoSangre->nombre="AB-";
        $tipoSangre->save();

        $tipoSangre= new Tiposangre;
        $tipoSangre->nombre="O+";
        $tipoSangre->save();

        $tipoSangre= new Tiposangre;
        $tipoSangre->nombre="O-";
        $tipoSangre->save();

        $tipoSangre= new Tiposangre;
        $tipoSangre->nombre="Desconocido";
        $tipoSangre->save();
    }
}
