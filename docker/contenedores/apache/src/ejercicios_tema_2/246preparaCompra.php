<?php include 'encabezado.php'; ?>

<form action="246listaCompra.php" method="POST">
    <!-- Similar a 245preparaTiquetCompra.php -->
    <?php
    $cantidad = $_GET['cantidad'] ?? 1;
    for ($i = 1; $i <= $cantidad; $i++): ?>
        Producto <?= $i ?>: <input type="text" name="producto[]" required><br>
        Precio <?= $i ?> (euros): <input type="number" name="precio[]" step="0.01" required><br>
    <?php endfor; ?>
    <button type="submit">Generar Lista de Compra</button>
</form>

<?php include 'pie.php'; ?>
