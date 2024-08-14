<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Qué somos? - KREC</title>
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="{{ asset('images/app_logo.svg') }}" alt="Logo de KREC">
            <div class="brand-name">KREC</div>
        </div>
        <div class="links">
            <a href="{{ url('/') }}">Inicio</a>
            <a href="{{ url('about') }}">¿Qué somos?</a>
            <a href="{{ url('yt') }}">Visual</a>
            <a href="{{ url('map') }}">Nuestra ubicación</a>
            <a href="{{ url('compra') }}">Comprar</a>
            <a href="{{ url('contacto') }}">Contáctanos</a>
        </div>
        <a href="{{ url('login') }}" class="login-btn"><i class="fas fa-user"></i></a>
    </nav>

    <div class="container">
        <h1>¿Qué somos?</h1>
        <p>Somos una comunidad dedicada al cuidado y bienestar de los perros. Nuestra misión es proporcionar información útil, recursos y productos de calidad para ayudar a los dueños de mascotas a brindarles una vida feliz y saludable a sus amigos peludos.</p>
        <h2>Nuestra Visión</h2>
        <p>Nuestra visión es llegar a ser un referente global en la promoción del bienestar animal, impactando positivamente en la vida de millones de perros y sus familias en todo el mundo.</p>
        <p>Creemos en la importancia de crear una sociedad donde cada perro tenga la oportunidad de vivir una vida plena y feliz, rodeado de amor, cuidado y respeto por parte de sus humanos.</p>
    </div>
</body>
</html>
