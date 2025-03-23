<!DOCTYPE html>
<html lang="es">

<head>
    <title>Editar Producto</title>
</head>

<body>
    <h1>Editar Producto</h1>

    <form action="{{ route('productos.update', $producto->idProducto) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $producto->nombre }}" required><br>

        <label>Descripción:</label>
        <textarea name="descripcion" required>{{ $producto->descripcion }}</textarea><br>

        <label>Precio:</label>
        <input type="number" name="precio" value="{{ $producto->precio }}" required><br>

        <button type="submit">Actualizar</button>
    </form>

    <a href="{{ route('productos.index') }}">Volver a la lista</a>
</body>

</html>