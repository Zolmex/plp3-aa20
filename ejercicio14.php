<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    $vector = ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"];
    echo "Primer elemento: " . $vector[0] . ". Último elemento: " . $vector[count($vector) - 1];
    ?>
</body>
</html>
