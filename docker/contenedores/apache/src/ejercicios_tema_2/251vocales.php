<?php
    function cuentaVocales($frase){
        $a=0;
        $e=0;
        $i=0;
        $o=0;
        $u=0;
        for($j=0; $j<strlen($frase); $j++){
            $letra=strtolower($frase[$j]);
            if($letra == 'a'){
                $a++;
            }
            elseif($letra == 'e'){
                $e++;
            }
            elseif($letra == 'i'){
                $i++;
            }
            elseif($letra == 'o'){
                $o++;
            }
            elseif($letra == 'u'){
                $u++;
            }
        }

         echo ("De la frase: ".$frase . " hay estas letras\n a:".$a."\ne:".$e."\ni:".$i."\no:".$o."\nu:".$u);
     
    }
    $frase= "aa ee ii oo uu";
    cuentaVocales($frase);

?>