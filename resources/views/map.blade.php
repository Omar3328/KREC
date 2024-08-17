<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestra ubicación - KREC</title>
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/app_logo.svg') }}">
    <style>
        /* Estilos opcionales para el contenedor del mapa */
        #map {
            height: 400px; /* Altura del mapa */
            width: 100%; /* Ancho del mapa (se ajusta al contenedor) */
            border: 1px solid #ccc; /* Borde del mapa */
        }
    </style>
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
            <a href="{{ url('compra') }}">Comprar</a>
            <a href="{{ url('contacto') }}">Contáctanos</a>
        </div>
        <a href="{{ url('login') }}" class="login-btn"><i class="fas fa-user"></i></a>
    </nav>

    <div class="container">
        <h1>Nuestra ubicación</h1>
        <p>Encuéntranos en...</p>
        <!-- Contenedor del mapa -->
        <div id="map"></div>
    </div>

    <!-- Script para cargar la API de Google Maps -->
    <script>
        function initMap() {
            // Coordenadas de ubicación inicial (Guadalajara, México)
            const initialCoords = { lat: 20.6736, lng: -103.3438 };

            // Opciones del mapa
            const mapOptions = {
                center: initialCoords, // Centrar el mapa en las coordenadas iniciales
                zoom: 12 // Nivel de zoom inicial
            };

            // Crear instancia del mapa en el elemento con id 'map'
            const map = new google.maps.Map(document.getElementById('map'), mapOptions);

            // Opcional: Agregar marcador en las coordenadas iniciales
            const marker = new google.maps.Marker({
                position: initialCoords,
                map: map,
                title: 'Ubicación inicial'
            });
        }
    </script>

    <!-- Cargar la API de Google Maps con la clave de API y llamar a initMap() al cargar -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvH_wBR9wEOXm4r39boQ8oAV6q_9QlMSc&callback=initMap" async defer></script>
</body>
</html>
