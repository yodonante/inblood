<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    /**
     * Devueleve al dueño de la tarea.
     *
     * @return void
     */
    public function usuario()
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * Devuelve el centro medico al cual pertenece la tarea.
     *
     * @return void
     */
    public function centromedico()
    {
        return $this->belongsTo(Centromedico::class);
    }

    /**
     * Devuelva a las personas involucradas en la tarea.
     *
     * @return void
     */
    public function personas()
    {
        return $this->belongsToMany(Persona::class);
    }
}
