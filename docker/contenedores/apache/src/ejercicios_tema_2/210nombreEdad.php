<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $edad=$_GET['edad'];
    switch($edad):
        case $edad<3 && $edad=0:
            echo "Eres un bebe";
            break;
        case $edad<=12:
            echo "Eres un niño";
            break;
        case $edad<=17:
            echo "Eres un adolescente";
            break;
        case $edad<=66:
            echo "Eres un adulto";
            break;
        default:
        case  $edad>=67:
            echo "Eres un jubilado ";
            break;
    endswitch;  // Cierre del switch
   ?>
    
</body>
</html>