<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nombre = $_GET['nombre']  ? : "jose";
    $verbo = $_GET['verbo'] != "" ? $_GET['verbo'] : "bailar";
    $adj = $_GET['adj'] != "" ? $_GET['adj'] : "feo";
    $adv = $_GET['adv'] != "" ? $_GET['adv'] : "solamente";

    echo "El $nombre es tan $adj que  $verbo  $adv.";

    ?>
</body>

</html>