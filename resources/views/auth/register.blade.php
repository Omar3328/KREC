<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - KREC</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #2196F3, #1976D2);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 5px;
            box-sizing: border-box;
        }
        .container {
            background-color: #fff;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 280px;
            text-align: center;
        }
        h1 {
            margin-bottom: 10px;
            color: #333;
            font-size: 1.3em;
            background: linear-gradient(45deg, #2196F3, #1976D2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        label {
            display: block;
            margin-bottom: 4px;
            color: #555;
            text-align: left;
            font-size: 0.85em;
        }
        input {
            width: calc(100% - 16px);
            padding: 6px;
            margin-bottom: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 0.85em;
        }
        button {
            width: 100%;
            padding: 8px;
            background-color: #2196F3;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.95em;
        }
        button:hover {
            background-color: #1976D2;
        }
        .errors {
            margin-top: 8px;
            padding: 6px;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            border-radius: 4px;
            color: #721c24;
            text-align: left;
            font-size: 0.85em;
        }
        .login-link {
            margin-top: 8px;
            font-size: 0.75em;
        }
        .login-link a {
            color: #2196F3;
            text-decoration: none;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>KREC Registro</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label for="name">Nombres:</label>
            <input type="text" name="name" id="name" required>

            <label for="apellido_paterno">Apellido Paterno:</label>
            <input type="text" name="apellido_paterno" id="apellido_paterno" required>

            <label for="apellido_materno">Apellido Materno:</label>
            <input type="text" name="apellido_materno" id="apellido_materno" required>

            <label for="edad">Edad:</label>
            <input type="number" name="edad" id="edad" required min="1">

            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" required>

            <label for="password_confirmation">Confirmar Contraseña:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>

            <button type="submit">Registrarse</button>

            @if ($errors->any())
                <div class="errors">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </form>
        <div class="login-link">
            <p>¿Ya tienes cuenta? <a href="{{ route('login') }}">Inicia sesión aquí</a></p>
        </div>
    </div>
</body>
</html>
