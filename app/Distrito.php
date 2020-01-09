<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    public function personas()
    {
        return $this->hasMany(Persona::class);
    }

    public function provincia()
    {
        return $this->belongsTo(Provincia::class);
    }

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }
}
