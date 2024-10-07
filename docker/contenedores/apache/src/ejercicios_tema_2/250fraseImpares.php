<?php 
    function fraseImpar($frase){
        $nuevafrase="";
        for($i=0;$i<strlen($frase); $i++){
            if($i %2 != 0){
                $nuevafrase.=$frase[$i];
            }
        }
        return $nuevafrase;
    };

    $frase= "hola como te llamas";
    echo $frase;
    echo "<br>";
    echo fraseImpar($frase);
    ?>