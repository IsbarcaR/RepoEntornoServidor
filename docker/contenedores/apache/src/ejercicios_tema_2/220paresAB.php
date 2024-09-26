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
    $numeroPares=[];
    for($i=$inicio;$i<=$fin;$i+=2){
        $numeroPares[]=$i;
    }
    shuffle($numeroPares);
    echo "Números pares entre $inicio y $fin: <br>";
    foreach($numeroPares as $numero){
        echo $numero." ";
    }

    ?>
</body>
</html>