<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Centromedico extends Model
{
    /**
     * Devuelve a los usuarios pertenecientes al centro médico.
     *
     * @return void
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    /**
     * Devuelve las tareas que han sido asignados por usuarios del centro medico.
     *
     * @return void
     */
    public function tareas()
    {
        return $this->hasMany(Tarea::class);
    }

    /**
     * Devuelve los campos de contacto que posee un centro médico.
     *
     * @return void
     */
    public function camposcontactos()
    {
        return $this->hasMany(CampoContacto::class);
    }

    /**
     * Devuelve las notas que tiene el centro medico.
     *
     * @return void
     */
    public function notas()
    {
        return $this->hasMany(Nota::class);
    }

    /**
     * Devuelve las mensajerías que posee el centro médico.
     *
     * @return void
     */
    public function mensajerias()
    {
        return $this->hasMany(Mensajeria::class);
    }
}
