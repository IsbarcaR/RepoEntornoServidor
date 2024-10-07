<?php
// Crear un array asociativo con nombres y alturas
$personas = [
    "Aitor" => 182,
    "Beatriz" => 165,
    "Carlos" => 175,
    "Diana" => 160,
    "Eduardo" => 170
];

// Calcular la altura media
$media = array_sum($personas) / count($personas);

// Mostrar la tabla
echo "<table border='1'>";
echo "<tr><th>Nombre</th><th>Altura</th></tr>";
foreach ($personas as $nombre => $altura) {
    echo "<tr><td>$nombre</td><td>$altura</td></tr>";
}
echo "<tr><td>Media</td><td>$media</td></tr>";
echo "</table>";
?>
