<?php 
function codificar($frase, $desplazamiento, $abc) {
    $frasecod = "";
    $abc = strtolower($abc); // Asegura que el abecedario esté en minúsculas
    $longitudAbc = strlen($abc); // Longitud del abecedario

    for ($i = 0; $i < strlen($frase); $i++) {
        $caracter = strtolower($frase[$i]); // Convertimos el caracter a minúsculas para evitar problemas
        if (ctype_alpha($caracter)) {
            // Obtén la posición actual del caracter en el abecedario
            $posicion = strpos($abc, $caracter);

            // Aplica el desplazamiento y ajusta para que el índice no supere la longitud del abecedario
            $nuevaPosicion = ($posicion + $desplazamiento) % $longitudAbc;

            // Añade el carácter codificado a la frase final
            $nuevoCaracter = $abc[$nuevaPosicion];

            // Si el carácter original era mayúscula, vuelve a convertirlo a mayúscula
            if (ctype_upper($frase[$i])) {
                $nuevoCaracter = strtoupper($nuevoCaracter);
            }

            $frasecod .= $nuevoCaracter;
        } else {
            // Si no es una letra, se deja tal cual
            $frasecod .= $frase[$i];
        }
    }
    return $frasecod;
}

echo codificar("Hola mundo!", 3, "abcdefghijklmnopqrstuvwxyz");
?>
