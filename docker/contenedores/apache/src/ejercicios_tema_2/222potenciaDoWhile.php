<!DOCTYPE html>
<html lang="es ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $base=isset($_GET["base"])? : 2;
        $exponente=isset($_GET["exponente"])? : 10;
        $resultado=1;
        echo "$base elevado a  $exponente es: ";
        $i=1;
        do {$resultado=$base*$resultado;
            $i++;
        }while($i<=$exponente);
            
    
        
        
        echo $resultado;
    ?>
</body>
</html> 