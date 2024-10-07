<?php
$cantidad = $_GET['cantidad'] ?? 1;
?>

<form action="245imprimeTiquetCompra.php" method="POST">
    <?php for ($i = 1; $i <= $cantidad; $i++): ?>
        Producto <?= $i ?>: <input type="text" name="producto[]" required><br>
        Precio <?= $i ?> (euros): <input type="number" name="precio[]" step="0.01" required><br>
    <?php endfor; ?>
    <button type="submit">Generar Tiquet</button>
</form>
