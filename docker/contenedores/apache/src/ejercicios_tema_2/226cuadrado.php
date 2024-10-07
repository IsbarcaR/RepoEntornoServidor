<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuadrado con bordes</title>
</head>
<body>
<?php
    $tamano = isset($_POST['tamano']) ? intval($_POST['tamano']) : 0;

    if ($tamano > 0) {
        echo "<table border='1' cellpadding='10' cellspacing='0'>";
        for ($fila = 1; $fila <= $tamano; $fila++) {
            echo "<tr>";
            for ($columna = 1; $columna <= $tamano; $columna++) {
                if ($fila == 1 || $fila == $tamano || $columna == 1 || $columna == $tamano) {
                    echo "<td>*</td>";
                } else {
                    echo "<td></td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Por favor, introduce un tamaño válido.</p>";
    }
?>
</body>
</html>
