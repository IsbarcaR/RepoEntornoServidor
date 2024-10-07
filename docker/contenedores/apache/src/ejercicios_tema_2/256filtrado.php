<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numeros = $_POST['numeros']; // Recibe los números desde el formulario
    $arrayNumeros = explode(" ", $numeros); // Convierte la cadena en un array

    $numerosPares = array_filter($arrayNumeros, function($num) {
        return $num % 2 == 0;
    });

    $cantidadPares = count($numerosPares);

    echo "Los $cantidadPares números pares son: " . implode(" ", $numerosPares);
}
?>
