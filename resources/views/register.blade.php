<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - KREC</title>
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

.container {
    background-color: white;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    max-width: 500px;
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

input[type="text"],
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

input[type="text"]:focus,
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

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 2rem;
    background-color: #333;
}

.navbar .logo {
    display: flex;
    align-items: center;
}

.navbar .logo img {
    height: 40px;
    margin-right: 10px;
}

.navbar .brand-name {
    color: white;
    font-size: 1.2rem;
    font-weight: bold;
}

.navbar .links a {
    color: white;
    margin-left: 1.5rem;
    text-decoration: none;
    font-size: 1rem;
}

.navbar .login-btn {
    color: white;
    text-decoration: none;
    font-size: 1.2rem;
}
 /* Puedes reutilizar el CSS mejorado del login aquí o ajustarlo según sea necesario */
    </style>
</head>
<body>
    <nav class="navbar">
        <!-- Tu código de navegación aquí -->
    </nav>

    <div class="container">
        <h1>Registro</h1>
        <form id="registerForm" method="POST" action="{{ route('register') }}">
            @csrf
            <label for="first_name">Nombre:</label>
            <input type="text" id="first_name" name="first_name" required>
            
            <label for="last_name_p">Apellido Paterno:</label>
            <input type="text" id="last_name_p" name="last_name_p" required>
            
            <label for="last_name_m">Apellido Materno:</label>
            <input type="text" id="last_name_m" name="last_name_m" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Registrar</button>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.4/axios.min.js"></script>
</body>
</html>
