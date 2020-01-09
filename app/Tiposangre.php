<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiposangre extends Model
{
    /**
     * Devuelve a las personas que posean el tipo de sangre.
     *
     * @return void
     */
    public function personas()
    {
        return  $this->hasMany(Persona::class);
    }
}
