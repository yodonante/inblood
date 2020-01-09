<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtapasDonacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etapas_donacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->string('responsable');
            $table->longtext('carta_notarial')->nullable();
            $table->tinyInteger('tipo_donacion'); //0:voluntario - 1:reposición
            $table->unsignedInteger('persona_id');
            $table->unsignedInteger('registro_basico_id')->nullable();
            $table->unsignedInteger('examen_fisico_id')->nullable();
            $table->unsignedInteger('hemograma_id')->nullable();
            $table->unsignedInteger('entrevista_id')->nullable();
            $table->unsignedInteger('donacion_id')->nullable();
            $table->unsignedInteger('diferido_id')->nullable();
            $table->unsignedInteger('centromedico_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etapas_donacions');
    }
}
