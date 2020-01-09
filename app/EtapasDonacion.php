<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EtapasDonacion extends Model
{
    /**
     * Devuelve la persona la esta en este proceso de donación
     *
     * @return void
     */
    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }

    /**
     * Muestra el registro basico de esta donación.
     *
     * @return void
     */
    public function registrobasico()
    {
        return $this->belongsTo(RegistroBasico::class);
    }
    
    /**
     * Devuelve el examen físico de esta donación.
     *
     * @return void
     */
    public function examenfisico()
    {
        return $this->belongsTo(ExamenFisico::class);
    }
    
    /**
     * Devuelve el hemograma de esta donación.
     *
     * @return void
     */
    public function hemograma()
    {
        return $this->belongsToMany(Hemograma::class);
    }
    
    /**
     * Devuelve la entrevista de esta donación.
     *
     * @return void
     */
    public function entrevista()
    {
        return $this->belongsTo(Entrevista::class);
    }

    /**
     * Devuelve la entrevista de esta donación.
     *
     * @return void
     */
    public function donacion()
    {
        return $this->belongsTo(Donacion::class);
    }
    
    /**
     * Devuelve el diferido de esta donación.
     *
     * @return void
     */
    public function diferido()
    {
        return $this->belongsTo(Diferido::class);
    }
    
}
