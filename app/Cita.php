<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    /**
     * Devuelve a la persona que posee la cita.
     *
     * @return void
     */
    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }
}
