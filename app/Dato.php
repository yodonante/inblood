<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Dato extends pivot
{
    protected $table="datos";
    
    /**
     * Devuelve los correos enviados a este dato.
     *
     * @return void
     */
    public function correos()
    {
        return $this->belongsToMany(Correo::class, 'correo_dato', 'dato_id', 'correo_id');
    }

    /**
     * Devuelve los correos enviados a este dato.
     *
     * @return void
     */
    public function llamadas()
    {
        return $this->hasMany(Llamada::class, 'dato_id');
    }

    /**
     * Devuelve a la persona dueña del dato.
     *
     * @return void
     */
    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }

    /**
     * Devuelve que tipo de contacto es el dato.
     *
     * @return void
     */
    public function campo_contacto()
    {
        return $this->belongsTo(CampoContacto::class);
    }
}
