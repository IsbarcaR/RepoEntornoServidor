<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Verificar si se recibieron los campos
    if (isset($_GET['campo']) && is_array($_GET['campo'])) {
        $campos = $_GET['campo']; // Obtener el array de valores de los campos
        $sumaTotal = 0;

        // Sumar todos los valores numéricos de los campos
        foreach ($campos as $valor) {
            // Validar que el valor sea numérico antes de sumarlo
            if (is_numeric($valor)) {
                $sumaTotal += (float)$valor; // Convertir a número y sumar
            } else {
                echo "El valor '" . htmlspecialchars($valor) . "' no es numérico. Ignorado.<br>";
            }
        }

        // Mostrar el total de la suma
        echo "<h2>Total de la suma: " . $sumaTotal . "</h2>";
    } else {
        echo "No se han recibido valores válidos.";
    }
} else {
    echo "Método no permitido.";
}
?>
