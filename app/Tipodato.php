<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipodato extends Model
{
    /**
     * Devuelve los campoContactos de este tipo.
     *
     * @return void
     */
    public function campoContactos()
    {
        return $this->hasMany(CampoContacto::class);
    }
}
