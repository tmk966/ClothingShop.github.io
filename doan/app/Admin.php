<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $table = 'admins';
    protected $fillable = [
        'email', 'name', 'password','remember_token'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}