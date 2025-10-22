<?php
$nombre = "";
$lista_deportes = [];
$deportes = "";
$respuesta = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["name"]);
    
    if (isset($_POST["futbol"])){
        array_push($lista_deportes, "Fútbol");
    }
    if (isset($_POST["basket"])){
        array_push($lista_deportes, "Basket");
    }
    if (isset($_POST["tennis"])){
        array_push($lista_deportes, "Tennis");
    }
    if (isset($_POST["voley"])){
        array_push($lista_deportes, "Voley");
    }

    for ($i = 0; $i < count($lista_deportes); $i++) {
        if ($i == 0){
            $deportes = $lista_deportes[$i];
            continue;
        }

        $deportes .= ", ".$lista_deportes[$i];
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
    <form method="post" action="ejercicio11.php">
        <label for="name">Nombre:</label>
        <input type="text" name="name" placeholder="Ingrese su nombre"><br>
        <label>Deporte:</label><br>
        <label for="futbol">Fútbol</label>
        <input type="checkbox" name="futbol" value="futbol"><br>
        <label for="basket">Basket</label>
        <input type="checkbox" name="basket" value="basket"><br>
        <label for="tennis">Tennis</label>
        <input type="checkbox" name="tennis" value="tennis"><br>
        <label for="voley">Voley</label>
        <input type="checkbox" name="voley" value="voley"><br>
        <input type="submit" value="Confirmar">
    </form>
    <?php if ($respuesta): ?>
        <p><?php echo $nombre . " juega: " . $deportes ?></p>
    <?php endif; ?>
</body>
</html>
