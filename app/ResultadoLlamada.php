<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultadoLlamada extends Model
{
    /**
     * Devuelve las llamadas con este resultado
     *
     * @return void
     */
    public function llamadas()
    {
        return $this->hasMany(Llamada::class);
    }
}
