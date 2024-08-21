<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprar - KREC</title>
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="{{ asset('images/app_logo.svg') }}" alt="">
            <div class="brand-name">KREC</div>
        </div>
        <div class="links">
            <a href="{{ url('/') }}">Inicio</a>
            <a href="{{ url('about') }}">¿Qué somos?</a>
            <a href="{{ url('yt') }}">Visual</a>
            <a href="{{ url('map') }}">Nuestra ubicación</a>
            <a href="{{ url('contacto') }}">Contáctanos</a>
        </div>
        <a href="{{ url('login') }}" class="login-btn"><i class="fas fa-user"></i></a>
    </nav>

    <div class="container">
        <h1>Comprar</h1>
        <p>Aquí puedes comprar el collar inteligente KREC...</p>
        <!-- Agrega información sobre cómo comprar -->
    </div>
</body>
</html>
