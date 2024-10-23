<?php
// Devuelve nombre formado por la 1ª letra de cada palabra en mayúsculas
// Ejemplo: 2º Desarrollo de Aplicaciones Web --> 2DAW
function nombreCorto(string $nombreLargo) : string {
    $nombreCorto = "";
    $palabras = explode(" ", $nombreLargo);
    foreach ($palabras as $palabra) {
        $letra = substr($palabra, 0, 1);
        if($letra == strtoupper($letra)){
            $nombreCorto.= substr($palabra, 0, 1);
        }
    }
    return $nombreCorto;
}
