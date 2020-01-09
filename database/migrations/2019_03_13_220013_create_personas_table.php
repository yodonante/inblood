<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dni')->unique();
            $table->string('nombre');
            $table->string('apellido');
            $table->date('fechaNacimiento');
            $table->boolean('sexo');
            $table->date('fecha_ultima_donacion')->nullable();
            $table->date('fecha_proxima_donacion')->nullable();
            $table->unsignedInteger('tiposangre_id');
            $table->char('distrito_id');
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
        Schema::dropIfExists('personas');
    }
}
