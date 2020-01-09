<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Correo extends Model
{
    /**
     * Devuelve los datos de destinatarios del correo.
     *
     * @return void
     */
    public function datos()
    {
        return $this->belongsToMany(Dato::class, 'correo_dato', 'correo_id', 'dato_id');
    }
}
