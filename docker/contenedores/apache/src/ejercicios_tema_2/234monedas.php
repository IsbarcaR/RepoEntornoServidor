<?php
// Definir las denominaciones de las monedas
$monedas = [500, 200, 100, 50, 20, 10, 5, 2, 1];
$cantidad = 1293; // Por ejemplo

// Array asociativo para almacenar cuántas monedas de cada denominación
$desglose = [];

foreach ($monedas as $moneda) {
    if ($cantidad >= $moneda) {
        $desglose[$moneda] = intdiv($cantidad, $moneda);
        $cantidad %= $moneda;
    }
}

// Mostrar el desglose en una lista desordenada
echo "<ul>";
foreach ($desglose as $moneda => $num) {
    echo "<li>$num monedas de $moneda</li>";
}
echo "</ul>";
?>
