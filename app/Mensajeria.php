<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensajeria extends Model
{
    /**
     * Devuelve a las personas que contiene la mensajeria.
     *
     * @return void
     */
    public function personas()
    {
        return $this->belongsToMany(Persona::class);
    }

    /**
     * Devueleve a que centro médico pertenece la mensajería.
     *
     * @return void
     */
    public function centromedico()
    {
        return $this->belongsTo(Centromedico::class);
    }
}
