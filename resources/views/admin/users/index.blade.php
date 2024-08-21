@extends('layouts.app')

@section('content')
<style>
    /* Estilos personalizados */
    .container {
        max-width: 1200px;
        margin: auto;
    }
    h1 {
        text-align: center;
        margin-bottom: 30px;
        color: #343a40;
    }
    .btn-primary {
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        color: #fff;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
    }
    .btn-primary:hover {
        background-color: #0056b3;
    }
    .btn-warning {
        background-color: #ffc107;
        border: none;
        border-radius: 5px;
    }
    .btn-warning:hover {
        background-color: #e0a800;
    }
    .btn-danger {
        background-color: #dc3545;
        border: none;
        border-radius: 5px;
    }
    .btn-danger:hover {
        background-color: #c82333;
    }
    .table {
        border-collapse: collapse;
        width: 100%;
        margin-top: 20px;
    }
    .table th, .table td {
        border: 1px solid #dee2e6;
        padding: 12px;
        text-align: center;
    }
    .table th {
        background-color: #f8f9fa;
        font-weight: bold;
    }
    .table tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    .table tr:hover {
        background-color: #e9ecef;
    }
    .btn-group {
        display: flex;
        gap: 10px;
    }
</style>

<div class="container">
    <h1>Usuarios</h1>
    <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Crear Usuario</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Edad</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->apellido_paterno }}</td>
                    <td>{{ $user->apellido_materno }}</td>
                    <td>{{ $user->edad }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ ucfirst($user->role) }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('admin.users.edit', $user->_id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('admin.users.destroy', $user->_id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
