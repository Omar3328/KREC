<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController; // Importa el controlador

Route::get('/', function () {
    return view('home'); // Crea esta vista si es necesario
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/yt', function () {
    return view('yt');
});

Route::get('/map', function () {
    return view('map');
});

Route::get('/compra', function () {
    return view('compra');
});

Route::get('/contacto', function () {
    return view('contacto');
});

// Rutas para autenticación
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');
