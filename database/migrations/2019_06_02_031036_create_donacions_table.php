<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('numero_bolsa');
            $table->string('numero_tubo');
            $table->boolean('lesiones');
            $table->string('lesiones_descripcion');
            $table->integer('venopunsiones');
            $table->string('venopunsiones_descripcion');
            $table->float('volumen');
            $table->float('tiempo');
            $table->unsignedInteger('reaccion_adversa_id')->nullable();
            $table->longtext('otros');
            $table->float('eritrocitos');
            $table->date('fecha_eritrocitos');
            $table->float('leucocitos');
            $table->date('fecha_leucocitos');
            $table->float('plaquetas');
            $table->date('fecha_plaquetas');
            $table->float('plasma');
            $table->date('fecha_plasma');
            $table->date('proxima_donacion');
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
        Schema::dropIfExists('donacions');
    }
}
