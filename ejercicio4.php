<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
$num = rand(1, 100);
echo "Número generado: " . $num;
echo "<br>";
if ($num <= 50) {
    echo "Es menor o igual a 50";
} else {
    echo "Es mayor a 50";
}
?>
</body>
</html>
