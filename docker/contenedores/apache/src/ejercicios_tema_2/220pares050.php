<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numeroPares=[];
    for($i=0;$i<=50;$i+=2){
        $numeroPares[]=$i;
    }
    shuffle($numeroPares);
    echo "Números pares entre 0 y 50: <br>";
    foreach($numeroPares as $numero){
        echo $numero." ";
    }

    ?>
</body>
</html>