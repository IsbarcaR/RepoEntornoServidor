<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
</head>
<body>
<?php
    $tamano = 10; // Se puede modificar para hacer tablas más grandes

    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    
    // Primera fila de encabezados
    echo "<tr><th>*</th>";
    for ($columna = 1; $columna <= $tamano; $columna++) {
        echo "<th>$columna</th>";
    }
    echo "</tr>";

    // Filas de la tabla
    for ($fila = 1; $fila <= $tamano; $fila++) {
        echo "<tr>";
        // Primera columna de cada fila (encabezado)
        echo "<th>$fila</th>";
        for ($columna = 1; $columna <= $tamano; $columna++) {
            $resultado = $fila * $columna;
            echo "<td>$resultado</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
?>
</body>
</html>
