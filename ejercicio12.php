<?php
$nombre = "";
$mensaje = "";
$respuesta = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["name"]);
    $ingresoVal = htmlspecialchars($_POST["ingresos"]);
    switch ($ingresoVal) {
        case "1":
            $mensaje = "Sus ingresos son entre 1 y 1000. No debe pagar impuestos.";
            break;
        case "2":
            $mensaje = "Sus ingresos son entre 1001 y 3000. No debe pagar impuestos.";
            break;
        case "3":
            $mensaje = "Sus ingresos son mayores a 3000. Debe pagar impuestos.";
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
    <form method="post" action="ejercicio12.php">
        <label for="name">Nombre:</label>
        <input type="text" name="name" placeholder="Ingrese su nombre"><br>
        <label>Ingresos mensuales:</label><br>
        <select name="ingresos" id="ingresos">
            <option valu="">-- Elija una opción --</option>
            <option value="1">1-1000</option>
            <option value="2">1001-3000</option>
            <option value="3">>3000</option>
        </select><br>
        <input type="submit" value="Confirmar">
    </form>
    <?php if ($respuesta): ?>
        <p><?php echo $mensaje ?></p>
    <?php endif; ?>
</body>
</html>
