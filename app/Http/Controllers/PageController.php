<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function yt()
    {
        return view('yt');
    }

    public function map()
    {
        return view('map');
    }

    public function compra()
    {
        return view('compra');
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function login()
    {
        return view('login');
    }
}
