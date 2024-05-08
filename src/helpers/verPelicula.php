<?php
require_once '../config/config.php';

if(isset($_POST['eliminar'])){
    $codigo = $_POST['eliminar'];
    $query = "DELETE FROM Pelicula WHERE codigo = :codigo";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':codigo', $codigo);
    try {
        $stmt->execute();
    } catch (PDOException $e) {
        if ($e->errorInfo[1] == 1451) {
            echo "<script>alert('No se puede eliminar esta funcion porque está siendo referenciada por otra tabla');</script>";
        } else {
            throw $e; // Si no es el error que esperábamos, relanzamos la excepción
        }
    }
}

$query = "SELECT * FROM Pelicula;";
$stmt = $conn->query($query);


if($stmt->rowCount() > 0){
    echo "<h2>Lista de las Salas</h2>";
    echo "<table border='1'>";
    echo "<tr>
            <th>Codigo de la Pelicula</th>
            <th>Nombre de Pelicula</th>
            <th>Clasificacion</th>
          </tr>";
          while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo "<tr>
                    <td>".$row['codigo']."</td>
                    <td>".$row['nombre']."</td>
                    <td>".$row['Clasificacion']."</td>
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