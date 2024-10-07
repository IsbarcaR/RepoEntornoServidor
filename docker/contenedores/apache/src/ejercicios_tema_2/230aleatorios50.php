<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $arr=[];
        for($i=0;$i<50;$i++){
            $num=rand(0,99);

            array_push($arr,$num);
            
        }
        print_r($arr);
    ?>
</body>
</html>