<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class AddUser extends Authenticatable
{
    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}