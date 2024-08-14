<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    // Mostrar el formulario de registro
    public function showRegisterForm()
    {
        return view('register');
    }

    // Manejar el registro de usuario
    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name_p' => 'required|string|max:255',
            'last_name_m' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'first_name' => $request->first_name,
            'last_name_p' => $request->last_name_p,
            'last_name_m' => $request->last_name_m,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registro exitoso. Por favor, inicie sesión.');
    }

    // Mostrar el formulario de inicio de sesión
    public function showLoginForm()
    {
        return view('login');
    }

    // Manejar el inicio de sesión
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home')->with('success', 'Inicio de sesión exitoso.');
        }

        return redirect()->back()->withErrors(['email' => 'Las credenciales no coinciden.']);
    }
}
