<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHemogramaSangreComponenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hemograma_sangre_componente', function (Blueprint $table) {
            $table->unsignedInteger('hemograma_id');
            $table->unsignedInteger('sangre_componente_id');
            $table->float('medida');
            $table->boolean('cumple');
            $table->longtext('comentario')->nullable();
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
        Schema::dropIfExists('hemograma_sangre_componente');
    }
}
