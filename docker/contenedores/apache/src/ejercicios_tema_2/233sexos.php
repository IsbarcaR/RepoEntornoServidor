<?php
// Crear un array con 100 elementos aleatorios entre "M" y "F"
$sexos = [];
for ($i = 0; $i < 100; $i++) {
    $sexos[] = rand(0, 1) == 0 ? "M" : "F";
}

// Contar cuántos "M" y cuántos "F" hay
$conteo = array_count_values($sexos);

// Mostrar los resultados
echo "M: " . $conteo["M"] . "<br>";
echo "F: " . $conteo["F"] . "<br>";
?>
