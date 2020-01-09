<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voluntario extends Model
{
    protected $fillable = [
        'nombre', 'apellido', 'email', 'celular'
    ];
}
