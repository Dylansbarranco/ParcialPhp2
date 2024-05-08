<!DOCTYPE html>
<html>
<head>
    <title>Crear Sala de Cine</title>
</head>
<body>
    <h1>Crear Sala de Cine</h1>
    <form method="POST" action="../helpers/CrearSalas.php">
        <label for="nombre">nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <label for="capacidad">capacidad:</label>
        <input type="text" id="capacidad" name="capacidad" required><br><br>
        <input type="submit" name="action" value="Crear sala">
    </form>
</body>
<br>
<a href="../helpers/VerSalas.php"><button>Ver salas</button></a>
</html>
