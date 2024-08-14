<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KREC - Collar Inteligente</title>
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('css/app_logo.svg') }}">
  <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..................." crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <style>
    /* Estilos CSS para la página de inicio */
    body {
      font-family: 'Montserrat', sans-serif !important;
      font-weight: 500;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
      /* Fondo gris claro */
      color: #333;
      /* Texto negro */
      line-height: 1.6;
      /* Interlineado */
    }

    nav {
      height: 80px;
      width: auto;
      margin: 0px auto;
      background-color: #2196F3;
      font-family: 'Montserrat', sans-serif !important;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: relative;
      font-size: 20px;
    }

    .logo {
      display: flex;
      align-items: center;
    }

    .logo img {
      max-width: 120px;
      margin-right: 5px;
      transition: transform 0.3s ease-in-out;
    }

    .logo img:hover {
      transform: rotate(180deg);
    }

    .brand-name {
      color: #fff;
      font-size: 24px;
    }

    .links {
      text-align: left;
      flex: 2;
    }

    .botones-derecha {
      flex: 1;
      display: flex;
      justify-content: flex-end;
    }

    .botones-derecha button {
      margin-left: 10px;
    }

    /*animacion de navbar*/
    a {
      text-decoration: none;
      color: #ffffff;
      padding: 15px;
      margin-left: 20px;
      position: relative;
      font-size: 18px;
    }

    .links a:first-child {
      margin-left: 30px;
    }

    a::after {
      content: "";
      position: absolute;
      left: 50%;
      bottom: 0;
      width: 0;
      height: 2px;
      background: rgba(252, 255, 38, 0.5);
      /* Cambia el color de fondo al pasar el mouse */
      transition: width 0.3s ease-in-out, left 0.3s ease-in-out;
    }

    .navbar a:hover::after {
      left: 0;
      width: 100%;
    }

    a:hover {
      color: #FFC91D;
    }

    .botones-derecha {
      display: flex;
    }

    .botones-derecha button {
      font-family: "Luckiest Guy", cursive;
      border: none;
      border-radius: 20px;
      margin-right: 20px;
      margin-left: 20px;
      padding: 10px;
      padding-left: 20px;
      padding-right: 20px;
      cursor: pointer;
      transition: background-color 0.2s ease-in-out;
    }

    .container {
      max-width: 1200px;
      /* Ancho máximo del contenedor */
      margin: 20px auto;
      padding: 20px;
      background-color: #ffffff;
      /* Fondo blanco */
      border-radius: 30px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      /* Sombra suave */
      text-align: justify;
      /* Justifica el texto */
    }

    h1 {
      color: #2196F3;
      /* Color azul para el encabezado */
      font-size: 36px;
      /* Tamaño de fuente grande */
      margin-bottom: 20px;
      /* Margen inferior */
      text-align: center;
      /* Centrar texto */
    }

    h1:last-child {
      font-family: "Luckiest Guy", cursive;
    }

    h3 {

      color: #666666;
      font-size: 18px;
      line-height: 1.8;
      font-weight: 400;
      margin-bottom: 20px;
      text-align: justify;
    }


    p {
      color: #666666;
      /* Color de texto gris oscuro */
      font-size: 18px;
      /* Tamaño de fuente */
      line-height: 1.8;
      /* Interlineado */
      font-weight: 400;
      margin-bottom: 20px;
      /* Margen inferior */
      text-align: center;
      /* Centrar texto */
    }

    .image-container {
      display: flex;
      justify-content: space-between;
      margin-top: 40px;
    }

    .image-container div {
      text-align: center;
      /* Centrar el texto */
      width: 22%;
      /* Ancho del contenedor de la imagen */
    }

    .image-container img {
      width: 100%;
      /* Ajustar el ancho de la imagen al contenedor */
      margin-bottom: 10px;
      /* Espacio entre la imagen y el texto */
      transition: transform 0.3s ease;
      /* Transición suave del efecto de zoom */

    }


    /* Efecto de zoom al pasar el mouse */
    .image-container img:hover {
      transform: scale(1.2);
      /* Aumenta el tamaño de la imagen al 110% */
    }

    .image-container p {
      color: #666666;
      font-size: 18px;
      line-height: 1.8;
      font-weight: 400;
      margin-bottom: 20px;
    }

    .brand-name {
      font-family: 'Luckiest Guy', sans-serif !important;
      font-size: 40px;
    }

    .login-btn a {
      margin-right: 20px !important;
    }

    p.importante {
      color: #FFC91D;
      font-family: 'Luckiest Guy', sans-serif !important;

      font-weight: 700;
      font-size: 23px;
    }

    @media only screen and (max-width: 600px) {
      .navbar-brand {
        font-size: 24px;
        /* Reducir tamaño de fuente para dispositivos móviles */
      }
    }

  </style>
</head>

<body>
  <!-- Barra de navegación -->
  <nav class="navbar">
    <div class="logo">
      <img src="{{ asset('css/app_logo.svg') }}" alt="">
      <div class="brand-name">KREC</div>
    </div>
    <div class="links">
      <a href="{{ url('about') }}">¿Qué somos?</a>
      <a href="{{ url('yt') }}">Visual</a>
      <a href="{{ url('map') }}">Nuestra ubicación</a>
      <a href="{{ url('compra') }}">Comprar</a>
      <a href="{{ url('contacto') }}">Contáctanos</a>
    </div>

    <a href="{{ url('login') }}" class="login-btn"><i class="fas fa-user"></i></a>
  </nav>

  <!-- Contenido principal -->
  <div class="section blue">
    <div class="container">
      <h1>Bienvenido a KREC <br> Collar Inteligente</h1>
      <h3>En <strong>KREC</strong> nos enorgullece presentarte nuestro collar inteligente para perros. Este innovador dispositivo utiliza tecnología de vanguardia para brindarle a tu mascota una experiencia de vida más segura y emocionante.</h3>
      <h3>El collar inteligente de <strong>KREC</strong> está equipado con características increíbles, como rastreo GPS en tiempo real, monitoreo de actividad física. Conéctate con tu mascota como nunca antes y mantén su bienestar bajo control en todo momento.</h3>
      <div class="image-container">
        <div>
          <img src="{{ asset('images/collar.png') }}" alt="Collar Inteligente - Imagen 1">
          <p class="importante">Accesorio diario</p>
        </div>
        <div>
          <img src="{{ asset('images/navegacion.png') }}" alt="Collar Inteligente - Imagen 2">
          <p class="importante">Monitoreo en tiempo real</p>
        </div>
        <div>
          <img src="{{ asset('images/correr.png') }}" alt="Collar Inteligente - Imagen 3">
          <p class="importante">Estadísticas de actividad</p>
        </div>
      </div>
    </div>
  </div>

  <div class="section white">
    <!-- Contenido de la segunda sección -->
  </div>

</body>

</html>
