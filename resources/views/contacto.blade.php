<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctanos - KREC</title>
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/app_logo.svg') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
    <!-- Barra de navegación -->
    <nav class="navbar">
        <div class="logo">
            <img src="{{ asset('images/app_logo.svg') }}" alt="Logo KREC">
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
        <div class="botones-derecha">
            <a href="{{ url('login') }}" class="login-btn"><i class="fas fa-user"></i></a>
        </div>
    </nav>

    <!-- Contenedor principal -->
    <div class="container">
        <h1>Contáctanos</h1>
        <p>Para contactarnos, puedes utilizar los siguientes medios:</p>
        
        <div class="contact-icons">
            <a href="https://www.facebook.com/cesaromar.fernandezmendiola?mibextid=nb1MFm3jZYALyyMy" target="_blank" class="facebook">
                <i class="fab fa-facebook-f"></i> Facebook
            </a>
            <a href="https://wa.me/3310656952" target="_blank" class="whatsapp">
                <i class="fab fa-whatsapp"></i> WhatsApp
            </a>
            <a href="mailto:cesar.fernandez23e@utzmg.edu.mx" class="email">
                <i class="far fa-envelope"></i> Correo Electrónico
            </a>
        </div>
    </div>

    <!-- Importar FontAwesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
</body>

</html>
