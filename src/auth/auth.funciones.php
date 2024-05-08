<?php
session_start();
require_once 'src/config/config.php';

function validarUsuario($username, $contraseña) {
    global $conn;

    $usuario = $conn->quote($username);
    $contrasena = $conn->quote($contraseña);

    $query = "SELECT * FROM Administradores WHERE username = '$username'";
    $result = $conn->query($query);

    if ($result && $result->rowCount() > 0) {
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $storedPassword = $row['password'];

        if ($contraseña === $storedPassword) {
            $_SESSION['nombre'] = $username; // Guardar el nombre en la sesión
            return true; 
            
        }
    }

    return false;
}
?>