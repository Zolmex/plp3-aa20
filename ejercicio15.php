<?php
$nombre = "";
$direccion = "";
$cantidadJyQ = 0;
$cantidadNapo = 0;
$cantidadMuza = 0;
$nombreArchivo = "pedidos.txt";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $direccion = htmlspecialchars($_POST["direccion"]);
    if (isset($_POST["jamonQueso"])) {
        $cantidadJyQ = (int) htmlspecialchars($_POST["cantidadJyQ"]);
    }
    if (isset($_POST["napolitana"])) {
        $cantidadNapo = (int) htmlspecialchars($_POST["cantidadNapo"]);
    }
    if (isset($_POST["muzarella"])) {
        $cantidadMuza = (int) htmlspecialchars($_POST["cantidadMuza"]);
    }

    $pedido = "-- Pedido --:Nombre=$nombre;Direccion=$direccion;CantidadJyQ=$cantidadJyQ;CantidadNapo=$cantidadNapo;CantidadMuza=$cantidadMuza;";

    $archivo = fopen($nombreArchivo, "a+"); // Las escrituras siempre van a estar al final del archivo
    fwrite($archivo, $pedido . "\n");
    fclose($archivo);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form method="post" action="ejercicio15.php">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" placeholder="Ingrese su nombre"><br>
        <label for="address">Dirección:</label>
        <input type="text" name="direccion" placeholder="Ingrese su dirección"><br>
        <label>Tipo:</label><br>
        <label for="jamonQueso">Jamon y Queso</label>
        <input type="checkbox" name="jamonQueso" value="jamonQueso"><br>
        <label for="cantidadJyQ">Cantidad:</label>
        <input type="number" min="1" max="20" name="cantidadJyQ"><br>
        <label for="napolitana">Napolitana</label>
        <input type="checkbox" name="napolitana" value="napolitana"><br>
        <label for="cantidadNapo">Cantidad:</label>
        <input type="number" min="1" max="20" name="cantidadNapo"><br>
        <label for="muzzarella">Muzzarella</label>
        <input type="checkbox" name="muzzarella" value="muzzarella"><br>
        <label for="cantidadMuza">Cantidad:</label>
        <input type="number" min="1" max="20" name="cantidadMuza"><br>
        <input type="submit" value="Confirmar">
    </form>
</body>
</html>
