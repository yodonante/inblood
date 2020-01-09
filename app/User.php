<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Devuelve el centro médico a cual pertenece el usuario.
     *
     * @return void
     */
    public function centromedico()
    {
        return $this->belongsTo(Centromedico::class);
    }

    /**
     * Devuelve las tareas que posee el usuario.
     *
     * @return void
     */
    public function tareas()
    {
        return $this->hasMany(Tarea::class);
    }

    /**
     * Devuelve la persona dueña del usuario.
     *
     * @return void
     */
    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }

    /**
     * Devuelve el estado de inbound en que se encuetra el usuario.
     *
     * @return void
     */
    public function inboundEstado()
    {
        return $this->belongsTo(InboundEstado::class);
    }
}
