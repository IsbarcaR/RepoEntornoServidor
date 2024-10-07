<?php
include '244euros.php';

// Pruebas con la cotización por defecto
echo "1000 pesetas a euros: " . peseta2euros(1000) . " €<br>";
echo "10 euros a pesetas: " . euros2pesetas(10) . " pesetas<br>";

// Pruebas con nuevas cotizaciones
echo "1000 pesetas a euros (cotización 150): " . peseta2euros(1000, 150) . " €<br>";
echo "10 euros a pesetas (cotización 150): " . euros2pesetas(10, 150) . " pesetas<br>";
?>
