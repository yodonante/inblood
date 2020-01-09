<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrevista extends Model
{
    /**
     * Devuelve la etapa a la que pertenece la entrevista. 
     *
     * @return void
     */
    public function etapa()
    {
        return $this->hasOne(EtapasDonacion::class);
    }
}
