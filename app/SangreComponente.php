<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SangreComponente extends Model
{
    /**
     * hemograma
     *
     * @return void
     */
    public function hemograma()
    {
        return $this->belongsToMany(Hemograma::class, 'hemograma_sangre_componente')
                    ->using(HemogramaSangreComponente::class)
                    ->withPivot(
                        'medida',
                        'cumple',
                        'comentario'
                    );
    }
}
