<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Repaso programacion funcional</h1>
    <?php

        $numeros=[1,2,3,4,5,6,7,8,9,10];
        
        $cuadrado=function($n){
            return $n * $n;
        };

        $cuadrados=array_map($cuadrado, $numeros); 

        print_r($cuadrados);
        echo "<br>";
        $cuadrados2=array_map(fn($e) => $e*$e, $numeros); 
        
        print_r($cuadrados2);

        echo "<br>";

        $mayores5=array_filter($numeros,fn($e) =>$e>5);
        print_r($mayores5);
        echo "<br>";

        $suma= array_reduce($numeros,fn($acumulador,$e) =>$acumulador+$e, 0);
        print_r($suma);
        echo "<br>";

        $maximo=array_reduce($numeros,fn($acu,$e) => ($e>$acu)? $e :$acu, $numeros[0]);
        print_r($maximo);
        echo "<br>";
    ?>

</body>
</html>