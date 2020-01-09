<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Llamada extends Model
{
    /**
     * Devuelve el resultado de la llamada.
     *
     * @return void
     */
    public function resultadollamada()
    {
        return $this->belongsTo(ResultadoLlamada::class);
    }

    /**
     * Devuelve el número al que se realizo la llamada.
     *
     * @return void
     */
    public function dato()
    {
        return $this->belongsTo(Dato::class);
    }
}
