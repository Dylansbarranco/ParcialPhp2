<?php
require_once '../config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $Nombre = $_POST['Nombre'];
    $Username = $_POST['Username'];
    $Correo = $_POST['Correo'];

    $consulta = "INSERT INTO Administradores (Id, Nombre, Username, Correo) VALUES (:Id, :Nombre, :Username, :Correo)";
    $stmt = $conn->prepare($consulta);
    $stmt->bindParam(':Id', $Id);
    $stmt->bindParam(':Nombre', $Nombre);
    $stmt->bindParam(':Username', $Username);
    $stmt->bindParam(':Correo', $Correo);

    if ($stmt->execute()) {
        echo "El administrador se ha creado correctamente.";
        echo '<br><a href="../page/home.php"><button>Aceptar</button></a>';
    } else {
        echo "Error al crear el admnistrador.";
    }
}
?>