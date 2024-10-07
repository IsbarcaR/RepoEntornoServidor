<?php
    function palindromo($frase){
        $fraseReves="";
        $frase=str_replace(" ","",$frase);
        for($i=strlen($frase)-1; $i>=0; $i--){
            $fraseReves.=$frase[$i];
        }
        
        if($fraseReves==$frase){
            return true;
        }else return false;

    }
    $frase="ligar es ser agil";
   echo "FRASE:$frase<br>";
    if(palindromo($frase)){
        echo "La frase es palindromo.";
    } else echo "La frase no es palindromo.";
?>