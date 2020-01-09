<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donacion extends Model
{
    /**
     * Devuelve la etapa a la que pertenece la donacion. 
     *
     * @return void
     */
    public function etapasdonacion()
    {
        return $this->hasOne(EtapasDonacion::class);
    }

    /**
     * Devuelve la reaccion adversa que puede poseer esta donación.
     *
     * @return void
     */
    public function reaccionadversa()
    {
        return $this->belongsTo(ReaccionAdversa::class);
    }
}
