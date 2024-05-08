<?php
// Ejecuta tu consulta y obtén los resultados
require_once '../config/config.php';
$consulta = "SELECT codigo FROM Pelicula";
$resultado = $conn->query($consulta);

$consulta2 = "SELECT codigo FROM Sala";
$resultado2 = $conn->query($consulta2);
?>

<form action="../helpers/Crearfuncion.php" method="POST">
    <h1>Crear funcion</h1>
    <br>

    <label for="codigo_pelicula">Código de la película:</label>
    <select name="pelicula">
    <?php while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)): ?>
        <option value="<?php echo $fila['codigo']; ?>"><?php echo $fila['codigo']; ?></option>
    <?php endwhile; ?>
    </select>
    <br>
    <br>

    <label for="codigo_sala">Código de la sala:</label>
    <select name="sala">
    <?php while ($fila = $resultado2->fetch(PDO::FETCH_ASSOC)): ?>
        <option value="<?php echo $fila['codigo']; ?>"><?php echo $fila['codigo']; ?></option>
    <?php endwhile; ?>
    </select>
    <br>
    <br>

    <label for="codigo_funcion">Código de la función:</label>
    <input type="text" name="codigo_funcion" id="codigo_funcion" required>
    <br>
    <br>

    <label for="fecha_hora">Fecha y hora:</label>
    <input type="datetime-local" name="fecha_hora" id="fecha_hora" required>
    <br>
    <br>

    <input type="submit" value="Crear función">
</form>
<br>
<a href="../auth/Verf.php"><button>ver funciones</button></a>

