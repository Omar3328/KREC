<?php
// app/Http/Controllers/UserController.php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function createUser()
    {
        $user = User::create([
            'name' => 'César Omar',
            'apellido_paterno' => 'Fernández',
            'apellido_materno' => 'Mendiola',
            'edad' => 20,
            'email' => 'cesar.fernandez@example.com',
            'password' => '12345678', // Contraseña sin encriptar
            'role' => 'admin'
        ]);

        return 'User created successfully!';
    }
}

