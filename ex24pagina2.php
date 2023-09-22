<!DOCTYPE html>
<html>
<head>
    <title>Comprobación de Contraseña</title>
</head>
<body>
    <h2>Comprobación de Contraseña</h2>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Obtener las contraseñas ingresadas desde el formulario
        $contrasenya1 = $_POST['contrasenya1'];
        $contrasenya2 = $_POST['contrasenya2'];

        // Comprobar si las contraseñas coinciden
        if ($contrasenya1 !== $contrasenya2) {
            echo "ERROR: Las contraseñas deben coincidir.<br>";
        }

        // Comprobar si al menos una contraseña contiene al menos un número
        elseif (!preg_match('/\d/', $contrasenya1) && !preg_match('/\d/', $contrasenya2)) {
            echo "ERROR: La contraseña debe contener al menos un número.<br>";
        } else {
            echo "Las contraseñas coinciden y al menos una de ellas contiene un número.<br>";
        }
    }
    ?>
    <a href="ex24pagina1.php">Volver al formulario</a>
</body>
</html>
