<?php

// Devuelve la cantidad de dígitos de un número.
function digitos(int $num): int {
    return strlen((string) abs($num));
}

// Devuelve el dígito que ocupa la posición $pos (empezando por la izquierda).
function digitoN(int $num, int $pos): int {
    $numStr = (string) abs($num); // Convertimos el número a cadena
    if ($pos > 0 && $pos <= strlen($numStr)) {
        return (int) $numStr[$pos - 1]; // Retornamos el dígito en la posición (ajustando 1 para índice)
    }
    return -1; // Si la posición no es válida
}

// Le quita por detrás (derecha) $cant dígitos al número.
function quitaPorDetras(int $num, int $cant): int {
    return (int) substr((string) abs($num), 0, -$cant);
}

// Le quita por delante (izquierda) $cant dígitos al número.
function quitaPorDelante(int $num, int $cant): int {
    return (int) substr((string) abs($num), $cant);
}

// Pruebas con paso de argumentos posicionales y con nombre
$num = 123456789;
echo "Número: $num\n";

// Paso de argumentos posicionales
echo "Cantidad de dígitos: " . digitos($num) . "\n";
echo "Dígito en la posición 3: " . digitoN($num, 3) . "\n";
echo "Quitar 3 dígitos por detrás: " . quitaPorDetras($num, 3) . "\n";
echo "Quitar 3 dígitos por delante: " . quitaPorDelante($num, 3) . "\n";

// Paso de argumentos con nombre (disponible a partir de PHP 8.0)
echo "Dígito en la posición 5: " . digitoN(num: $num, pos: 5) . "\n";
echo "Quitar 2 dígitos por delante: " . quitaPorDelante(num: $num, cant: 2) . "\n";

?>
