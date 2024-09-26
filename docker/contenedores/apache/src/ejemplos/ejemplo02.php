<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ejemplo 02 recoger datos de la url</h1>
    <p>Vamos a recoger la variables <strong>nombre</strong> y <strong>apellidos</strong> mediante <em>$_GET</em>.</p>
    <?php
    if (isset($_GET['nombre']) && ($_GET['nombre'] != "")) {
        $name = $_GET['nombre'];
    } else $name = "Desconocido";
    $surname = $_GET['apellidos'];
    /*if (isset($_Get['edad'])) $edad = $_GET['edad'];
    else $edad = 30;
    */
    //esto es igual que lo de arriba
    $edad = $_GET['edad'] ?? 30;
    echo "<p>Bienvenido $name $surname! tienes $edad años</p>  ";
    ?>
</body>

</html>