<?php

use Illuminate\Database\Seeder;
use App\ReaccionAdversa;

class ReaccionAdversaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reaccion = new ReaccionAdversa;
        $reaccion->nombre = "Desmayos";
        $reaccion->save();
        
        $reaccion = new ReaccionAdversa;
        $reaccion->nombre = "Náuseas y vómito";
        $reaccion->save();

        $reaccion = new ReaccionAdversa;
        $reaccion->nombre = "Hipocalcemia en donadores de aféresis";
        $reaccion->save();

        $reaccion = new ReaccionAdversa;
        $reaccion->nombre = "Angina de pecho";
        $reaccion->save();

        $reaccion = new ReaccionAdversa;
        $reaccion->nombre = "Hematomas";
        $reaccion->save();

        $reaccion = new ReaccionAdversa;
        $reaccion->nombre = "Punción arterial";
        $reaccion->save();

        $reaccion = new ReaccionAdversa;
        $reaccion->nombre = "Daño neurológico por la aguja";
        $reaccion->save();

        $reaccion = new ReaccionAdversa;
        $reaccion->nombre = "Daño neurológico por la aguja";
        $reaccion->save();

        $reaccion = new ReaccionAdversa;
        $reaccion->nombre = "Físula arteriovenosa";
        $reaccion->save();

        $reaccion = new ReaccionAdversa;
        $reaccion->nombre = "Flebitis y/o tromboflebitis";
        $reaccion->save();

        $reaccion = new ReaccionAdversa;
        $reaccion->nombre = "Hiperventilación";
        $reaccion->save();

        $reaccion = new ReaccionAdversa;
        $reaccion->nombre = "Hiperventilación";
        $reaccion->save();
    }
}
