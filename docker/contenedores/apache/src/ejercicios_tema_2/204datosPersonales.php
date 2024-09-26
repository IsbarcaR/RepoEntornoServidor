<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Variables
    $nombre = $_GET['nombre'];
    $apellidos=$_GET['apellidos'];
    $email = $_GET['email'];
    $anioNacimiento = $_GET['nacimiento'];
    $telefono = $_GET['tlf'];

    // Mostrar los datos dentro de una tabla
    echo "<table border='1'>";
    echo "<tr><td>Nombre:</td><td>$nombre</td></tr>";
    echo "<tr><td>Apellidos:</td><td>$apellidos</td></tr>";
    echo "<tr><td>Email:</td><td>$email</td></tr>";
    echo "<tr><td>Año de Nacimiento:</td><td>$anioNacimiento</td></tr>";
    echo "<tr><td>Teléfono:</td><td>$telefono</td></tr>";
    echo "</table>";
    ?>
</body>

</html>
