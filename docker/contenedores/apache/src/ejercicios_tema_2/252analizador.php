<?php
    function contarLetras($frase){
        $letras =0;
        $palabras=1;
        for($i=0;$i<strLen($frase);$i++){
            if($frase[$i] !=" "){
                $letras++;
            }else $palabras++;
        }
        echo "La frase tiene $letras letras y $palabras palabras";
    }
    $frase="Hola mundo como estas";
    echo $frase;
    echo "<br>";
    contarLetras($frase);
?>