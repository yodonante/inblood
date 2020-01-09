<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hemograma extends Model
{
    /**
     * Muestra la etapa de donación a la que pertenece este hemograma.
     *
     * @return void
     */
    public function etapa()
    {
        return $this->hasOne(EtapasDonacion::class);
    }

    /**
     * Devuelve los componentes del hemograma
     *
     * @return void
     */
    public function componentes()
    {
        return $this->belongsToMany(SangreComponente::class)
                    ->using(HemogramaSangreComponente::class)
                    ->withPivot(
                        'medida',
                        'cumple',
                        'comentario'
                    );
    }
}
