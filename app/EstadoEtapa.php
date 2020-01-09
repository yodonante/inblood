<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoEtapa extends Model
{
    /**
     * Devuelve los examenes de hemoglobina en este estado.
     *
     * @return void
     */
    public function examenhemoglobina()
    {
        return $this->hasMany(ExamenHemoglobina::class);
    }

    /**
     * Devuelve las entrevista en este estado.
     *
     * @return void
     */
    public function entrevistadonacion()
    {
        return $this->hasMany(EntrevistaDonacion::class);
    }

    /**
     * Devuelve las extracciones de sangre en este estado.
     *
     * @return void
     */
    public function extraccionsangre()
    {
        return $this->hasMany(ExtraccionSangre::class);
    }

    /**
     * Devuelve los analisis de sangre en este estado.
     *
     * @return void
     */
    public function analisissangre()
    {
        return $this->hasMany(AnalisisSangre::class);
    }
}
