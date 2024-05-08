<?php
require_once '../config/config.php';

if(isset($_POST['eliminar'])){
    $codigo = $_POST['eliminar'];
    $query = "DELETE FROM Funcion WHERE codigo = :codigo";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':codigo', $codigo);
    $stmt->execute();
}

$query = "SELECT Funcion.codigo, Funcion.fecha_hora, Pelicula.nombre AS nombre_pelicula, Sala.nombre AS nombre_sala
          FROM Funcion
          INNER JOIN Pelicula ON Funcion.codigo_pelicula = Pelicula.codigo
          INNER JOIN Sala ON Funcion.Codigo_sala = Sala.codigo";
$stmt = $conn->query($query);

if($stmt->rowCount() > 0){
    echo "<h2>Lista de funciones disponibles</h2>";
    echo "<table border='1'>";
    echo "<tr>
            <th>Código de Función</th>
            <th>Nombre de Sala</th>
            <th>Nombre de Película</th>
            <th>Fecha y Hora</th>
            <th>Acciones</th>
          </tr>";

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo "<tr>
                <td>".$row['codigo']."</td>
                <td>".$row['nombre_sala']."</td>
                <td>".$row['nombre_pelicula']."</td>
                <td>".$row['fecha_hora']."</td>
                <td>
                    <form method='post' action=''>
                        <input type='hidden' name='eliminar' value='".$row['codigo']."'>
                        <button type='submit'>Eliminar</button>
                    </form>
                </td>
              </tr>";
    }

    echo "</table>";
    echo '<br><a href="../page/home.php"><button>Regresar al menu incial</button></a>';
}
?>