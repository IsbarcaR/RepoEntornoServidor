<?php

function esPar(int $num): bool
{
    return $num % 2 === 0;
}

function arrayAleatorio(int $tam, int $min, int $max): array
{
    $array = [];
    for ($i = 0; $i < $tam; $i++) {
        $array[] = rand($min, $max);
    }
    return $array;
}

function arrayPares(array &$array): int
{
    $count = 0;
    foreach ($array as $num) {
        if (esPar($num)) {
            $count++;
        }
    }
    return $count;
}

// Example usage
$tam = 10;
$min = 1;
$max = 100;
$array = arrayAleatorio($tam, $min, $max);
echo "Array: " . implode(", ", $array) . "\n";// implode() concatena los elementos de un array en una cadena, separados por un separador especificado.
echo "Cantidad de números pares: " . arrayPares($array) . "\n";
