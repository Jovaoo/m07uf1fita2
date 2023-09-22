<?php
$usuarios_validos = array(
    'javier' => 'hola123',
    'kevin' => 'hola321',
);

$mensaje_error = '';
$mensaje_exito = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario_ingresado = $_POST['usuario'];
    $contrasena_ingresada = $_POST['contrasena'];

    if (array_key_exists($usuario_ingresado, $usuarios_validos) && $usuarios_validos[$usuario_ingresado] === $contrasena_ingresada) {
        $mensaje_exito = 'Login correcto!';
    } else {
        $mensaje_error = 'Login incorrecto. Por favor, verifica tu nombre de usuario y contraseña.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Inicio de Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form method="POST" action="">
        <label for="usuario">Nombre de Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br><br>
        <input type="submit" value="Iniciar Sesión">
    </form>
    <?php echo $mensaje_error; ?>
    <?php echo $mensaje_exito; ?>
</body>
</html>
