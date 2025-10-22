<?php
$usuarios = array(
    'Fulano' => '1222333',
    'Mengano' => '0200',
    'Pedro' => 'contraseña123',
    'Agustin' => '123123123123',
    'Seba' => '1234567890'
);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php echo "La contraseña de Fulano es: " . $usuarios['Fulano'] ?>
</body>
</html>
