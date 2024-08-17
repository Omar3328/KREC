<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class AuthController extends Controller
{
    protected $mongo;

    public function __construct()
    {
        // Usa la URI completa de MongoDB Atlas
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
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect()->route('login')->with('status', 'Registration successful. Please log in.');
    }
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $user = User::where('email', $request->input('email'))->first();
    
        if (!$user || !Hash::check($request->input('password'), $user->password)) {
            return redirect()->back()->withErrors(['email' => 'Invalid email or password.'])->withInput();
        }
    
        Auth::login($user);
    
        if ($user->role === 'admin') {
            return redirect()->route('admin.crud'); // Redirige al CRUD de admin
        } else {
            return redirect()->route('about'); // Redirige a la ruta 'about'
        }
    }}