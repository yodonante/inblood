<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroBasico extends Model
{
    /**
     * Muestra la etapa de donación a la que pertenece este registro.
     *
     * @return void
     */
    public function etapa()
    {
        return $this->hasOne(EtapasDonacion::class);
    }
}
