<?php
include '244euros.php';

$productos = $_POST['producto'];
$precios = $_POST['precio'];
$totalEuros = 0;
$totalPesetas = 0;

echo "<table border='1'>";
echo "<tr><th>Producto</th><th>Precio (Euros)</th><th>Precio (Pesetas)</th></tr>";
foreach ($productos as $i => $producto) {
    $precioEuros = $precios[$i];
    $precioPesetas = euros2pesetas($precioEuros);
    $totalEuros += $precioEuros;
    $totalPesetas += $precioPesetas;
    echo "<tr><td>$producto</td><td>$precioEuros €</td><td>$precioPesetas pesetas</td></tr>";
}
echo "<tr><td>Total</td><td>$totalEuros €</td><td>$totalPesetas pesetas</td></tr>";
echo "</table>";
?>
