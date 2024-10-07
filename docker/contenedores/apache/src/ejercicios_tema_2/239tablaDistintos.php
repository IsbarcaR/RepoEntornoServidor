<?php
$filas = 6;
$columnas = 9;
$numeros = range(100, 999);
shuffle($numeros); // Mezclar los números para que sean aleatorios

// Crear una tabla bidimensional con números aleatorios únicos
$tabla = [];
$index = 0;
for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        $tabla[$i][$j] = $numeros[$index];
        $index++;
    }
}

// Encontrar el máximo y el mínimo
$maximo = 0;
$minimo = 1000;
$maxCol = 0;
$minFila = 0;

for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        if ($tabla[$i][$j] > $maximo) {
            $maximo = $tabla[$i][$j];
            $maxCol = $j;
        }
        if ($tabla[$i][$j] < $minimo) {
            $minimo = $tabla[$i][$j];
            $minFila = $i;
        }
    }
}

// Mostrar la tabla con las reglas de estilo aplicadas
echo "<table border='1'>";
for ($i = 0; $i < $filas; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $columnas; $j++) {
        $color = "black";
        if ($i == $minFila) {
            $color = "green"; // Fila del mínimo
        }
        if ($j == $maxCol) {
            $color = "blue"; // Columna del máximo
        }
        echo "<td style='color: $color;'>{$tabla[$i][$j]}</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
