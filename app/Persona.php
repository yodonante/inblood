<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = [ 'dni',
                            'nombre',
                            'apellido',
                            'fechaNacimiento',
                            'sexo',
                            'tiposangre_id',
                            'distrito_id'];

    /**
     * Devuelve el tipo de sangre de la persona.
     *
     * @return void
     */
    public function tiposangre()
    {
        return $this->belongsTo(Tiposangre::class);
    }

    /**
     * Devuelve las notas que posea la persona.
     *
     * @return void
     */
    public function notas()
    {
        return $this->hasMany(Nota::class);
    }

    /**
     * Devuelve los procesos de donación que posee la persona.
     *
     * @return void
     */
    public function etapasdonacion()
    {
        return $this->hasMany(EtapasDonacion::class);
    }

    /**
     * Devuelve las tareas que enfocadas en la persona.
     *
     * @return void
     */
    public function tareas()
    {
        return $this->belongsToMany(Tarea::class);
    }

    /**
     * Devuelve las mensajerias que contengan a la persona.
     *
     * @return void
     */
    public function mensajerias()
    {
        return $this->belongsToMany(Mensajeria::class);
    }

    /**
     * Se relaciona con los campos de contacto que posee el contacto.
     *
     * @return void
     */
    public function camposcontactos()
    {
        return $this->belongsToMany(CampoContacto::class, 'datos')
                    ->using(Dato::class);
    }

    /**
     * Devuelve al usuario al cual pertenece la persona.
     *
     * @return void
     */
    public function usuarios()
    {
        return $this->hasMany(User::class);
    }

    /**
     * Devuelve el distrito al cual pertenece la persona.
     *
     * @return void
     */
    public function distrito()
    {
        return $this->belongsTo(Distrito::class);
    }

    /**
     * Devuelve los datos de contacto de la persona.
     *
     * @return void
     */
    public function datos()
    {
        return $this->hasMany(Dato::class);
    }

    /**
     * Devuelve las citas que tiene una persona.
     *
     * @return void
     */
    public function citas()
    {
        return $this->hasMany(Cita::class);
    }

    public function FunctionName(Type $var = null)
    {
        # code...
    }
}
