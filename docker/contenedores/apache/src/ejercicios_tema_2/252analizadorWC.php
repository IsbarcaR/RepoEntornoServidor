<?php
    function contarLetras($frase){
        $letras =0;
        $palabras=str_word_count($frase);
        for($i=0;$i<strLen($frase);$i++){
            if($frase[$i] !=" "){
                $letras++;
            }
        }
        echo "La frase tiene $letras letras y $palabras palabras";
    }
    $frase="Hola mundo como estas";
    echo $frase;
    echo "<br>";
    contarLetras($frase);
?>