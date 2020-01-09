<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReaccionAdversa extends Model
{
    /**
     * Devuelve las donaciones que hayan tenido esta reacción adversa.
     *
     * @return void
     */
    public function donaciones()
    {
        return $this->hasMany(Donacion::class);
    }
}
