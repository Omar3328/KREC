<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('login');
});
use App\Http\Controllers\AuthController;

Route::get('/about', function () {
    return view('about'); // Asegúrate de tener una vista llamada 'about.blade.php' en la carpeta 'resources/views'
})->name('about');

// Rutas para autenticación
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
use App\Http\Controllers\AdminUserController;

Route::middleware('auth')->group(function () {
    Route::get('admin/crud', [AdminUserController::class, 'index'])->name('admin.crud');
    Route::get('admin/crud/create', [AdminUserController::class, 'create'])->name('admin.users.create');
    Route::post('admin/crud', [AdminUserController::class, 'store'])->name('admin.users.store');
    Route::get('admin/crud/{id}/edit', [AdminUserController::class, 'edit'])->name('admin.users.edit');
    Route::put('admin/crud/{id}', [AdminUserController::class, 'update'])->name('admin.users.update');
    Route::delete('admin/crud/{id}', [AdminUserController::class, 'destroy'])->name('admin.users.destroy');
});


