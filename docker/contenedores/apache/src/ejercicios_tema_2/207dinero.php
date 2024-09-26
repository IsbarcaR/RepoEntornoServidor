<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $dinero=(int)$_GET['dinero'];
    $billetes=array(500,200,100,50,20,10,5,2,1);
    $cantidadbilletes=[];
    echo "El dinero $dinero se puede dividir en estas cantidades de billetes: <br>";
    foreach($billetes as $valor){
        $cantidadbilletes[$valor]=(int)($dinero/$valor) ; 
        $dinero=$dinero%$valor;
    }
    
    foreach($cantidadbilletes as $valor => $cantidad){
        if ($valor<5)echo"$cantidad monedas de $valor <br>";
        else echo "$cantidad billetes de $valor <br>";
    }
    
?>
</body>
</html>