<?php

namespace App\Auth;

use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Hash;

class MongoUserProvider implements UserProvider
{
    protected $hash;
    protected $model;

    public function __construct($hash, $model)
    {
        $this->hash = $hash;
        $this->model = $model;
    }

    public function retrieveById($identifier)
    {
        return $this->model::where('_id', $identifier)->first();
    }

    public function retrieveByToken($identifier, $token)
    {
        return $this->model::where('_id', $identifier)->where('remember_token', $token)->first();
    }

    public function updateRememberToken(Authenticatable $user, $token)
    {
        $user->setRememberToken($token);
        $user->save();
    }

    public function retrieveByCredentials(array $credentials)
    {
        return $this->model::where('email', $credentials['email'])->first();
    }

    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        return Hash::check($credentials['password'], $user->getAuthPassword());
    }
}
