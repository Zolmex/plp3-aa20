<?php
$nombreArchivo = "pedidos.txt";
$archivoTexto = "";

$archivo = fopen($nombreArchivo, "r");
while (!feof($archivo)) {
    $archivoTexto .= fgets($archivo);
}
fclose($archivo);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php echo $archivoTexto ?>
</body>
</html>
