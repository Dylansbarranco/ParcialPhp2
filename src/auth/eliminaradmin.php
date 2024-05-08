<?php
require_once '../config/config.php';

if(isset($_POST['eliminar'])){
    $codigo = $_POST['eliminar'];
    $query = "DELETE FROM Administradores WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}

$query = "SELECT Administradores.id, Administradores.nombre, Administradores.username, Administradores.correo FROM Administradores";
$stmt = $conn->query($query);

if($stmt->rowCount() > 0){
    echo "<h2>Lista Administradores</h2>";
    echo "<table border='1'>";
    echo "<tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Username</th>
            <th>Correo</th>
          </tr>";

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['nombre']."</td>
                <td>".$row['username']."</td>
                <td>".$row['correo']."</td>
              </tr>";
    }

    echo "</table>";
    echo '<br><a href="../page/home.php"><button>Regresar al menu incial</button></a>';
}
?>