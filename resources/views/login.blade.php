<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - KREC</title>
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(45deg, #1a2a6c, #b21f1f, #fdbb2d);
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        body {
    font-family: Arial, sans-serif;
    background: linear-gradient(45deg, #1a2a6c, #b21f1f, #fdbb2d);
    color: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    background-color: white;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    max-width: 400px;
    width: 100%;
    text-align: center;
}

h1 {
    margin-bottom: 1.5rem;
    color: #333;
}

label {
    display: block;
    text-align: left;
    margin-bottom: 0.5rem;
    color: #555;
}

input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 0.75rem;
    margin-bottom: 1rem;
    border-radius: 5px;
    border: 1px solid #ddd;
    font-size: 1rem;
    transition: border-color 0.3s, box-shadow 0.3s;
}

input[type="email"]:focus,
input[type="password"]:focus {
    border-color: #1a2a6c;
    box-shadow: 0 0 8px rgba(26, 42, 108, 0.2);
    outline: none;
}

button {
    padding: 0.75rem 1.5rem;
    border: none;
    border-radius: 5px;
    background-color: #1a2a6c;
    color: white;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.3s;
}

button:hover {
    background-color: #b21f1f;
    transform: scale(1.05);
}

button:active {
    transform: scale(0.95);
}


    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="{{ asset('images/app_logo.svg') }}" alt="Logo">
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
        <h1>Iniciar Sesión</h1>
        <form id="loginForm" method="POST" action="{{ route('login') }}">
    @csrf
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required>
    <button type="submit">Iniciar Sesión</button>
</form>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.4/axios.min.js"></script>
    <script>
        document.getElementById('loginForm').addEventListener('submit', async function(event) {
            event.preventDefault();
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            try {
                const response = await axios.post('http://192.168.50.155:3000/api/login', { email, password });
                alert('Inicio de sesión exitoso');
            } catch (error) {
                console.error('Error al iniciar sesión:', error);
                alert('Hubo un problema al iniciar sesión. Por favor, intenta de nuevo.');
            }
        });
    </script>
</body>
</html>
