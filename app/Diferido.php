<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diferido extends Model
{
    /**
     * Devuelve la etapa a la que pertenece el diferido. 
     *
     * @return void
     */
    public function etapa()
    {
        return $this->hasOne(EtapasDonacion::class);
    }
}
