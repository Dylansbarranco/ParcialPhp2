<!DOCTYPE html>
<html>
<head>
    <title>Inicio de Sesión</title>
</head>
<body>
    <h2>Inicio de Sesión</h2>
    <form method="POST" action="">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" name="action" value="Iniciar Sesión">
    </form>
    <br>


    <?php
    require_once 'src/auth/auth.funciones.php';
    $error = '';

    // Verificas si el formulario ha sido enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recoges los datos del formulario
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Llamas a la función de validación
        $esValido = validarUsuario($username, $password);

        // Si la función retorna true, rediriges al usuario a la página de inicio
        if ($esValido) {
            header('Location: src/page/home.php');
            exit();
        } else {
            // Si la función retorna false, estableces un mensaje de error
            $error = "Usuario o contraseña incorrectos";
        }
    }
?>
</body>
</html>
