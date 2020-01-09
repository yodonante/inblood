<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamenFisico extends Model
{
    /**
     * Devuelve la etapa a la que pertenece el examen físico. 
     *
     * @return void
     */
    public function etapa()
    {
        return $this->hasOne(EtapasDonacion::class);
    }
}
