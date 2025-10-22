<?php
$nombre = "";
$contrato = "";
$respuesta = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["name"]);
    $contrato = htmlspecialchars($_POST["contrato"]);
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
    <form method="post" action="ejercicio13.php">
        <label for="name">Nombre:</label>
        <input type="text" name="name" placeholder="Ingrese su nombre"><br>
        <label>Ingresos mensuales:</label><br>
        <textarea name="contrato">
        En la ciudad de [........], se acuerda entre la Empresa [..........] 
representada por el Sr. [..............] en su carácter de Apoderado,
con domicilio en la calle [..............] y el Sr. [..............],
futuro empleado con domicilio en [..............], celebrar el presente 
contrato a Plazo Fijo, de acuerdo a la normativa vigente de los
artículos 90,92,93,94, 95 y concordantes de la Ley de Contrato de Trabajo N° 20.744
        </textarea><br>
        <input type="submit" value="Confirmar">
    </form>
    <?php if ($respuesta): ?>
        <p><?php echo $nombre ." modificó el contrato:<br><textarea readonly>" .$contrato . "</textarea>"?></p>
    <?php endif; ?>
</body>
</html>
