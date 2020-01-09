<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InboundEstado extends Model
{
    /**
     * Devuelve los usuarios que se encuentran en el estado.
     *
     * @return void
     */
    public function usuarios()
    {
        return $this->hasMany(Persona::class);
    }
}
