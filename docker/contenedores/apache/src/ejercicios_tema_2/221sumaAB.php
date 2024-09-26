<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $inicio=isset($_GET["inicio"])?:0;
    $fin=isset($_GET["fin"])?: 100;
    $suma=0;
        for($i=$inicio; $i<=$fin; $i++){
            $suma+=$i;
        }    
        echo "La suma de los $fin números desde $inicio es: ".$suma."<br>";

    ?>
</body>
</html>