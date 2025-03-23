<!DOCTYPE html>
<html lang="es">

<head>
    <title>Panel de Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">

        <!-- Validar si existe la sesión 'admin' -->
        <h1 class="mb-4">
            Bienvenido, {{ session('admin') ? session('admin')->usuario : 'Invitado' }}
        </h1>

        <!-- Botón para crear un nuevo producto -->
        <a href="{{ route('productos.create') }}" class="btn btn-primary mb-3">Crear Nuevo Producto</a>

        <!-- Lista de productos -->
        <h2>Lista de Productos</h2>

        @if($productos->isEmpty())
        <p>No hay productos disponibles.</p>
        @else
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
                    <td>${{ number_format($producto->precio, 2) }}</td>
                    <td>
                        <a href="{{ route('productos.edit', ['producto' => $producto->idProducto]) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('productos.destroy', $producto->idProducto) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este producto?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif

        <!-- Botón de Cerrar Sesión -->
        <a href="{{ route('admin.logout') }}" class="btn btn-secondary">Cerrar Sesión</a>

    </div>
</body>

</html>