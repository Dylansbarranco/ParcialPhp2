<?php
require_once '../config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo_pelicula = $_POST['pelicula'];
    $codigo_sala = $_POST['sala'];
    $codigo_funcion = $_POST['codigo_funcion'];
    $fecha_hora = $_POST['fecha_hora'];

    $consulta = "INSERT INTO Funcion (codigo, codigo_pelicula, codigo_sala, fecha_hora) VALUES (:codigo, :codigo_pelicula, :codigo_sala, :fecha_hora)";
    $stmt = $conn->prepare($consulta);
    $stmt->bindParam(':codigo', $codigo_funcion);
    $stmt->bindParam(':codigo_pelicula', $codigo_pelicula);
    $stmt->bindParam(':codigo_sala', $codigo_sala);
    $stmt->bindParam(':fecha_hora', $fecha_hora);

    if ($stmt->execute()) {
        echo "La función se ha creado correctamente.";
        echo '<br><a href="../page/home.php"><button>Aceptar</button></a>';
    } else {
        echo "Error al crear la función.";
    }
}
?>