<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
$rand = rand(1, 3);
if ($rand == 1) {
    echo "El número es uno.";
} else if ($rand == 2) {
    echo "El número es dos.";
} else {
    echo "El número es tres.";
}
?>
</body>
</html>
