<?php 
    function cani($frase){
        $frase1=strtolower($frase);
        $fraseCani="";
        for($i=0;$i<strlen($frase);$i++){
            if($i%2==0){
                $fraseCani.=strtoupper($frase[$i]);
            }else $fraseCani.=$frase[$i];
        }
        return $fraseCani;
    }
    echo cani("hola me llamo antonio felipe");
?>