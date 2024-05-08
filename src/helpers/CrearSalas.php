<?php

require_once '../config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $capacidad = $_POST["capacidad"];

    $consulta = "SELECT * FROM Sala WHERE nombre = '$nombre'";
    $resultado = $conn->query($consulta);
    
    if ($resultado->rowCount() > 0) {
        // La sala de cine ya existe, mostrar un mensaje de error
        echo "La sala de cine '$nombre' ya existe.";
    } else {
        // Insertar la nueva sala de cine en la base de datos
        $consulta = "INSERT INTO Sala (nombre, capacidad) VALUES ('$nombre', $capacidad)";
        $resultado = $conn->exec($consulta);
        
        if ($resultado) {
            echo "La sala se ha agregado correctamente.";
            echo '<br><a href="../page/home.php"><button>Aceptar</button></a>';
        } else {
            echo "Error al agregar la sala.";
        }
    }
}
?>