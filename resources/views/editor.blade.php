<!DOCTYPE html>
<html lang="es">

<head>
    <title>Panel de Editor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Bienvenido, {{ session('admin')->usuario }}</h1>

        <!-- Lista de productos para editar -->
        <h2>Editar Productos</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>${{ $producto->precio }}</td>
                    <td>
                        <a href="{{ route('productos.edit', $producto->idProducto) }}" class="btn btn-warning btn-sm">Editar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Botón de Cerrar Sesión -->
        <a href="{{ route('admin.logout') }}" class="btn btn-secondary">Cerrar Sesión</a>
    </div>
</body>

</html>