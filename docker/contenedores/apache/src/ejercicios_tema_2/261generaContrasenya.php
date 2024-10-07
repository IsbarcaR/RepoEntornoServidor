<?php
function generarContrasenya($longitud) {
    $caracteres = array_merge(range('a', 'z'), range('A', 'Z'), range('0', '9'));
    $contrasenya = '';

    for ($i = 0; $i < $longitud; $i++) {
        $contrasenya .= $caracteres[array_rand($caracteres)];
    }

    return $contrasenya;
}

echo "Contraseña generada: " . generarContrasenya(10);
?>
