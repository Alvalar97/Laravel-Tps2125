<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Crear Producto</title>
</head>

<body>
    <h1>Crear Producto</h1>
    <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Nombre del producto -->
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>

        <!-- Descripción -->
        <label>Descripción:</label>
        <textarea name="descripcion" required></textarea><br>

        <!-- Precio -->
        <label>Precio:</label>
        <input type="number" step="0.01" name="precio" required><br>

        <!-- Categoría (idCategoria) -->
        <label>Categoría:</label>
        <select name="idCategoria" required>
            <!-- Ajusta estas opciones según tus categorías existentes en la BD -->
            <option value="4">Categoría 4</option>
            <option value="5">Categoría 5</option>
            <option value="6">Categoría 6</option>
        </select><br>

        <!-- Administrador (idAdmin) -->
        <label>Administrador:</label>
        <select name="idAdmin" required>
            <!-- Ajusta estas opciones según tus administradores en la BD -->
            <option value="1">Admin 1</option>
            <option value="2">Admin 2</option>
        </select><br>

        <!-- Campo para subir imagen -->
        <label>Imagen:</label>
        <input type="file" name="imagen" accept="image/*" required><br><br>

        <button type="submit">Guardar</button>
    </form>
    <a href="{{ route('productos.index') }}">Volver a la lista</a>
</body>

</html>