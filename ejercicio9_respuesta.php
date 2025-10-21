<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
$nombre = $_GET['name'];
$edad = (int)$_GET['age'];
echo "<p>Su nombre es: $nombre</p>";
if ($edad >= 18) {
    echo "<p>Usted es mayor de edad</p>";
}
else {
    echo "<p>Usted es NO mayor de edad</p>";
}
?>
</body>
</html>
