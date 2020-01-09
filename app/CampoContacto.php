<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampoContacto extends Model
{
    /**
     * Devuelve el centro médico al cual pertenece el campo de contacto.
     *
     * @return void
     */
    public function centromedico()
    {
        return $this->belongsTo(Centromedico::class);
    }

    /**
     * Se relaciona con las personas que usan estos campos de contacto.
     *
     * @return void
     */
    public function personas()
    {
        return $this->belongsToMany(CampoContacto::class)
        ->using(Dato::class)
        ->as('dato')
        ->withPivot('datos');
    }

    /**
     * Devuelve los datos que posee este campo.
     *
     * @return void
     */
    public function datos()
    {
        return $this->hasMany(Dato::class);
    }

    /**
     * Devuelve que tipo de contacto es.
     *
     * @return void
     */
    public function tipocontacto()
    {
        return $this->belongsTo(TipoContacto::class);
    }

    /**
     * Devuelve que tipo de dato posee este campo.
     *
     * @return void
     */
    public function tipodato()
    {
        return $this->belongsTo(Tipodato::class);
    }
}
