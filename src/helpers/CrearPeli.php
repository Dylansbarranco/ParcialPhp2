<?php
require_once '../config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $clasificacion = $_POST['clasificacion'];
    $sql = "INSERT INTO Pelicula (nombre, Clasificacion) VALUES (:nombre, :clasificacion)"; 
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':clasificacion', $clasificacion); 

    if ($stmt->execute()) {
        echo "La película se ha agregado correctamente.";
        echo '<br><a href="../page/home.php"><button>Aceptar</button></a>';
    } else {
        echo "Error al agregar la película.";
    }
}
?>