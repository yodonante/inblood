<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    public function provincias()
    {
        return $this->hasMany(Provincia::class);
    }

    public function distritos()
    {
        return $this->hasMany(Distrito::class);
    }
}
