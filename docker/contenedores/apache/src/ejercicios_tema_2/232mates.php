<?php
// Crear un array con 33 números aleatorios entre 0 y 100
$numeros = [];
for ($i = 0; $i < 33; $i++) {
    $numeros[] = rand(0, 100);
}

// Calcular el mayor, el menor y la media
$mayor = max($numeros);
$menor = min($numeros);
$media = array_sum($numeros) / count($numeros);

// Mostrar los resultados
echo "Mayor: $mayor<br>";
echo "Menor: $menor<br>";
echo "Media: $media<br>";
?>
