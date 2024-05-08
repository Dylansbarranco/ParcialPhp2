<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Película</title>
</head>
<body>
    <h2>Agregar Película</h2>
    <form method="POST" action="../helpers/CrearPeli.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <label for="clasificacion">Clasificación:</label>
        <select id="clasificacion" name="clasificacion">
            <option value="TP">TP</option>
            <option value="7">7</option>
            <option value="12">12</option>
            <option value="15">15</option>
            <option value="18">18</option>
        </select><br><br>
        <input type="submit" value="Agregar Película">
    </form>
    <a href="../helpers/verPelicula.php"><button>Ver Pelicula</button></a>
</body>
</html>
