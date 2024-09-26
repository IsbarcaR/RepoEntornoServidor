<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];

    $mayor = max($a, $b, $c);

    echo "El número mayor es: $mayor";
    ?>
</body>

</html>