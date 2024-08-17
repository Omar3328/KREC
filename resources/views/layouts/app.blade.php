<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    <!-- Agrega aquí tus estilos CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <!-- Aquí puedes agregar tu barra de navegación -->
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <!-- Aquí puedes agregar tu pie de página -->
    </footer>

    <!-- Agrega aquí tus scripts JS -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
