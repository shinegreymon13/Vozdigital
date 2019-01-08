<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $table = "usuario";
     protected $primaryKey = "rut_usuario";
     protected $keyType = "string";
     public $timestamps = false;

     protected $fillable = [
         'rut_usuario', 'nom_usuario', 'apellido_materno' ,'apellido_paterno', 'email', 'password', 'estado'
     ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
