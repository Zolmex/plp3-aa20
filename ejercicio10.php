<?php
$nombre = "";
$estudios = "";
$respuesta = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["name"]);
    $val = htmlspecialchars($_POST["estudios"]);
    switch ($val) {
        case "NoEstudios":
            $estudios = "$nombre no tiene estudios.";
            break;
        case "EstudiosPrimarios":
            $estudios = "$nombre tiene estudios primarios.";
            break;
        case "EstudiosSecundarios":
            $estudios = "$nombre tiene estudios secundarios.";
            break;
    }

    $respuesta = true;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form method="post" action="ejercicio10.php">
        <label for="name">Nombre:</label>
        <input type="text" name="name" placeholder="Ingrese su nombre"><br>
        <label for="estudios">No tiene estudios.</label>
        <input type="radio" name="estudios" value="NoEstudios"><br>
        <label for="estudios">Estudios primarios.</label>
        <input type="radio" name="estudios" value="EstudiosPrimarios"><br>
        <label for="estudios">Estudios secundarios.</label>
        <input type="radio" name="estudios" value="EstudiosSecundarios"><br>
        <input type="submit" value="Confirmar">
    </form>
    <?php if ($respuesta): ?>
        <p><?php echo $estudios ?></p>
    <?php endif; ?>
</body>
</html>
