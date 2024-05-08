<?php
require_once '../config/config.php';
try {
    $query = "SELECT * FROM Administradores";
    $stmt = $conn->query($query);    // Ejecutar la consulta

    if ($stmt->rowCount() > 0) {
        echo "<h2>Listado de Administradores</h2>";
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Nombre</th><th>Usuario</th><th>Correo</th></tr>";
        
        // Iterar sobre los resultados y mostrar cada fila en una tabla HTML
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['correo'] . "</td>";
            echo "</tr>";
        }
        
        echo "</table>";
    } else {
        echo "No se encontraron administradores.";
    }
} catch (PDOException $e) {
    // Manejar errores de la base de datos
    echo "Error: " . $e->getMessage();
}
?>
