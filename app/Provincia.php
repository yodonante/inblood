<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

    public function distritos()
    {
        return $this->hasMany(Distrito::class);
    }
}
