<!DOCTYPE html>
<html lang="es">

<head>
    <title>Detalle del Producto</title>
</head>

<body>
    <h1>Detalle del Producto</h1>

    <p><strong>Nombre:</strong> {{ $producto->nombre }}</p>
    <p><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
    <p><strong>Precio:</strong> ${{ $producto->precio }}</p>

    <a href="{{ route('productos.edit', $producto->id) }}">Editar</a>
    <a href="{{ route('productos.index') }}">Volver a la lista</a>
</body>

</html>