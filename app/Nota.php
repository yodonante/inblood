<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    /**
     * Devuelve a la persona poseedora de la nota.
     *
     * @return void
     */
    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }

    /**
     * Devuelve el centro medico al que pertenece la nota.
     *
     * @return void
     */
    public function centromedico()
    {
        return $this->belongsTo(Centromedico::class);
    }
}
