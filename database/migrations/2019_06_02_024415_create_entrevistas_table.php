<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrevistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrevistas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('manual');
            $table->boolean('edad');
            $table->boolean('peso');
            $table->boolean('ultima_donacion');
            $table->longtext('ultima_donacion_descripcion');
            $table->boolean('medicamentos');
            $table->longtext('medicamentos_descripcion');
            $table->boolean('lista_espera');
            $table->longtext('lista_espera_descripcion');
            $table->boolean('salud');
            $table->boolean('deporte');
            $table->boolean('enfermedad');
            $table->boolean('contacto');
            $table->boolean('vacuna');
            $table->longtext('vacuna_descripcion');
            $table->boolean('tatuaje_piercing_accidente');
            $table->boolean('intervencio_quirurgica');
            $table->boolean('enfermedad_control');
            $table->longtext('enfermedad_control_descripcion');
            $table->date('ultima_regla')->nullable();
            $table->string('ultima_regla_aprox')->nullable();
            $table->boolean('gestando')->nullable();
            $table->boolean('lactar')->nullable();
            $table->date('ultimo_parto')->nullable();
            $table->integer('gestaciones')->nullable();
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
        Schema::dropIfExists('entrevistas');
    }
}
