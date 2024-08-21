@extends('layouts.app')

@section('content')
<style>
    /* Estilos personalizados */
    .container {
        max-width: 600px;
        margin: auto;
    }
    h1 {
        text-align: center;
        margin-bottom: 30px;
        color: #343a40;
    }
    .form-group {
        margin-bottom: 20px;
    }
    .form-group label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
        color: #495057;
    }
    .form-control {
        border-radius: 5px;
        border: 1px solid #ced4da;
        padding: 10px;
        font-size: 16px;
    }
    .btn-success {
        background-color: #28a745;
        border: none;
        border-radius: 5px;
        color: #fff;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
    }
    .btn-success:hover {
        background-color: #218838;
    }
</style>

<div class="container">
    <h1>Crear Usuario</h1>
    <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="apellido_paterno">Apellido Paterno</label>
            <input type="text" name="apellido_paterno" id="apellido_paterno" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="apellido_materno">Apellido Materno</label>
            <input type="text" name="apellido_materno" id="apellido_materno" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="edad">Edad</label>
            <input type="number" name="edad" id="edad" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="role">Rol</label>
            <select name="role" id="role" class="form-control" required>
                <option value="user">Usuario</option>
                <option value="admin">Administrador</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Crear Usuario</button>
    </form>
</div>
@endsection
