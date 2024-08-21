<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class AuthController extends Controller
{
    protected $mongo;

    public function __construct()
    {
        $this->mongo = new \MongoDB\Client(env('DB_DSN'));
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'apellido_paterno' => 'required|string|max:255',
            'apellido_materno' => 'required|string|max:255',
            'edad' => 'required|integer|min:1',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ], [
            'name.required' => 'El nombre es obligatorio.',
            'apellido_paterno.required' => 'El apellido paterno es obligatorio.',
            'apellido_materno.required' => 'El apellido materno es obligatorio.',
            'edad.required' => 'La edad es obligatoria.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'El correo electrónico debe ser una dirección válida.',
            'email.unique' => 'El correo electrónico ya está registrado.',
            'password.required' => 'La contraseña es obligatoria.',
            'password.min' => 'La contraseña debe tener al menos 6 caracteres.',
            'password.confirmed' => 'La confirmación de la contraseña no coincide.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = new User();
        $user->name = $request->input('name');
        $user->apellido_paterno = $request->input('apellido_paterno');
        $user->apellido_materno = $request->input('apellido_materno');
        $user->edad = $request->input('edad');
        $user->email = $request->input('email');
        $user->password = $request->input('password'); // Contraseña sin encriptar
        $user->save();

        return redirect()->route('login')->with('status', 'Registro exitoso. Por favor, inicia sesión.');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string',
        ], [
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'El correo electrónico debe ser una dirección válida.',
            'password.required' => 'La contraseña es obligatoria.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::where('email', $request->input('email'))->first();

        if (!$user || $user->password !== $request->input('password')) {
            return redirect()->back()->withErrors(['email' => 'Correo o contraseña incorrectos.'])->withInput();
        }

        Auth::login($user);

        if ($user->role === 'admin') {
            return redirect()->route('admin.crud'); // Redirige al CRUD de admin
        } else {
            return redirect()->route('about'); // Redirige a la ruta 'about'
        }
    }
}
