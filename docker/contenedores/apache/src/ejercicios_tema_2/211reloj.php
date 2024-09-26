<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
     $hora = isset($_GET['hora']) ? (int)$_GET['hora'] : 0; // Valor por defecto es 0
     $minuto = isset($_GET['minuto']) ? (int)$_GET['minuto'] : 0; // Valor por defecto es 0
     $segundo = isset($_GET['segundo']) ? (int)$_GET['segundo'] : 0; // Valor por defecto es 0

    if ($hora>23){$hora=$hora%24;}
    if ($minuto>59){$minuto=$minuto%60;}
    if ($segundo>59){$segundo=$segundo%60;}
    
    // Mostrar la hora en formato HH:MM:SS
    if((int)$hora==23 && (int)$minuto==59 && (int)$segundo==59){$hora=00; $minuto=00; $segundo=00;}
    elseif((int)$minuto==59 && $segundo==59){$minuto=00 ;$segundo=00; $hora=(int)$hora+1;}
    elseif((int)$segundo==59){$segundo=00; $minuto=(int)$minuto+1;}
    else $segundo+1;
   
    echo $hora.":".$minuto.":".$segundo;
    ?>
</body>

</html>