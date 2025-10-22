<?php
function verificarContraseñas($pass1, $pass2) {
    if ($pass1 != $pass2) {
        return "Las contraseñas no coinciden.";
    }
    return "Las contraseñas coinciden correctamente.";
}

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pass1 = htmlspecialchars($_POST["pass1"]);
    $pass2 = htmlspecialchars($_POST["pass2"]);

    $mensaje = verificarContraseñas($pass1,$pass2);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form method="post" action="ejercicio18.php">
        <label for="name">Nombre:</label>
        <input type="text" name="name" placeholder="Ingrese su nombre"><br>
        <label for="pass1">Contraseña:</label>
        <input type="password" name="pass1" placeholder="Ingrese su contraseña"><br>
        <label for="pass2">Contraseña (otra vez):</label>
        <input type="password" name="pass2" placeholder="Ingrese su contraseña"><br>
        <input type="submit" value="Confirmar">
    </form>
    <?php echo $mensaje ?>
</body>
</html>
