<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $numero=$_GET['numero'];
    
        if($numero>0)echo "El número $numero es positivo";
        else if($numero==0)echo "El número $numero es 0";
        else echo "El número $numero es negativo";

    
    ?>
    
</body>
</html>