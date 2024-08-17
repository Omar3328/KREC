<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as LaravelAuthenticatable;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class User extends Eloquent implements Authenticatable
{
    use LaravelAuthenticatable;

    protected $connection = 'mongodb';
    protected $collection = 'users';

// En tu modelo de User
protected $fillable = ['name', 'email', 'password', 'role'];
}
