<?php
// Iniciar la sesión
session_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['nombre']; ?>!</h1>
    <p>Has iniciado sesión correctamente.</p>
    <p><a href="../auth/listarAdmi.php">Listar Administradores</a></p>
    <p><a href="../page/VistaCrearAdmin.php">Crear Administrador</a></p>
    <p><a href="./vistaCrearSala.php">Crear sala</a></p>
    <p><a href="Crearpeli.php">Crear Pelicula</a></p>
    <p><a href="./VistaCrearFunciones.php">Crear Funciones</a><p>
    <p><a href="../../index.php">Cerrar sesión</a></p>
    
</body>
</html>