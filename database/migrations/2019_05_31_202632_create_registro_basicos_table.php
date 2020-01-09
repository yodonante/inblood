<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroBasicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_basicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('edad');
            $table->string('sexo');
            $table->string('correo');
            $table->string('lugarNacimiento');
            $table->date('fechaNacimiento');
            $table->string('procedencia');
            $table->string('estadoCivil');
            $table->string('domicilio');
            $table->unsignedInteger('distrito_id');
            $table->unsignedInteger('provincia_id');
            $table->unsignedInteger('departamento_id');
            $table->string('ocupacion');
            $table->string('lugarTrabajo');
            $table->string('celular');
            $table->string('telefono');
            $table->string('viajes');
            $table->string('permanencia');
            $table->longtext('comentarios')->nullable();
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
        Schema::dropIfExists('registro_basicos');
    }
}
