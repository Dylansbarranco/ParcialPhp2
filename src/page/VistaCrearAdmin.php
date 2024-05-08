<!DOCTYPE html>
<html>
<head>
    <title>Crear Administrador</title>
</head>
<body>
    <h1>Crear Administrador</h1>
    <form method="POST" action="../helpers/CrearAdmin.php">
        <label for="id">id:</label>
        <input type="text" id="id" name="id" required><br><br>
        <label for="Nombre">Nombre:</label>
        <input type="text" id="Nombre" name="Nombre" required><br><br>
        <label for="Username">Username:</label>
        <input type="text" id="Username" name="Username" required><br><br>
        <label for="Correo">Correo:</label>
        <input type="text" id="Correo" name="Correo" required><br><br>
        <input type="submit" name="action" value="Crear admin">
    </form>
</body>
<br>
<a href="../auth/eliminaradmin.php"><button>Ver admins</button></a>
</html>