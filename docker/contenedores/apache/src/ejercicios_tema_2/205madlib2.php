<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nombre = $_GET['nombre'] != "" ? $_GET['nombre'] : 'jose';
    $verbo = $_GET['verbo'] !="" ? $_GET['verbo']: "bailar";
    $adj = $_GET['adj']!="" ? $_GET['adj']:"feo";
    $adv = $_GET['adv'] !="" ? $_GET['adv']:"solamente";
    $lugar = $_GET['lugar']!="" ? $_GET['lugar']:"monte";
    $tiempo = $_GET['tiempo']!="" ? $_GET['tiempo']:"pasado";
    $color = $_GET['color']!="" ? $_GET['color']:"verde";

    echo "<p>En el $tiempo, $nombre fue al $lugar. Decidió $verbo $adv, pero se detuvo al ver algo $color y muy $adj. ¡Qué día tan extraño!</p>";

    ?>
</body>

</html>