<?php
// ucwords: Convierte la primera letra de cada palabra en mayúscula.
$texto = "hola mundo";
echo "Con ucwords: " . ucwords($texto) . "<br>";

// strrev: Invierte una cadena.
$textoInvertido = strrev($texto);
echo "Con strrev: " . $textoInvertido . "<br>";

// str_repeat: Repite una cadena un número especificado de veces.
$repetido = str_repeat("Hola! ", 3);
echo "Con str_repeat: " . $repetido . "<br>";

// md5: Calcula el hash MD5 de una cadena (para encriptación básica).
$password = "miContraseña";
echo "Con md5: " . md5($password) . "<br>";
?>
