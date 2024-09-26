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
        $anioactual=date('Y');
       (int)$edad;
        echo "Tu edad en 10 años será: ". $edad+10 ." años y será el año ". ($anioactual+10)."<br> ";  
        echo "Tu edad hace 10 años era: ". $edad-10 ." años y era el año ". ($anioactual-10)."<br>  ";  
        echo "Te jubilaras en el año ". (67-$edad)+$anioactual." suerte. te quedan solo " . 67-$edad ." añitos <br>";

    ?>
</body>
</html>