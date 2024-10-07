<?php
function generarLetraAleatoria() {
    $letras = array_merge(range('a', 'z'), range('A', 'Z'));
    return $letras[array_rand($letras)];
}

echo "Letra aleatoria: " . generarLetraAleatoria();
?>
