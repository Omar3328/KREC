<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión - KREC</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #2196F3, #1976D2);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            width: 90%;
            max-width: 360px;
            text-align: center;
        }

        h1 {
            margin-bottom: 24px;
            color: #333;
            font-size: 2.2em;
            background: linear-gradient(45deg, #2196F3, #1976D2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #555;
            font-size: 0.9em;
            text-align: left;
        }

        input {
            width: 100%;
            padding: 14px;
            margin-bottom: 18px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 0.9em;
        }

        button {
            width: 100%;
            padding: 14px;
            background-color: #2196F3;
            color: #fff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #1976D2;
        }

        .errors {
            margin-top: 20px;
            padding: 12px;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            border-radius: 6px;
            color: #721c24;
            font-size: 0.9em;
        }

        .register-link {
            margin-top: 20px;
            font-size: 0.9em;
        }

        .register-link a {
            color: #1976D2;
            text-decoration: none;
            font-weight: bold;
        }

        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>KREC Inicio de Sesión</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">Iniciar Sesión</button>

            @if ($errors->any())
                <div class="errors">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </form>
        <div class="register-link">
            <p>¿No tienes cuenta? <a href="{{ route('register') }}">Regístrate aquí</a></p>
        </div>
    </div>
</body>

</html>
