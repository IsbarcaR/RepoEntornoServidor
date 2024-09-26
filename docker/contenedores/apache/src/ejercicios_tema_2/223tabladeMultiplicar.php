<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            text-align: center;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    // Obtener el valor de la tabla de multiplicar del parámetro GET o usar un valor predeterminado
    $numero = isset($_GET['numero']) ? (int)$_GET['numero'] : 7;

    echo "<h2>Tabla de multiplicar del número $numero</h2>";

    // Generar la tabla
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>a</th>";
    echo "<th>*</th>";
    echo "<th>b</th>";
    echo "<th>=</th>";
    echo "<th>a * b</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    // Generar las filas de la tabla de multiplicar
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "<tr>";
        echo "<td>$numero</td>";
        echo "<td>*</td>";
        echo "<td>$i</td>";
        echo "<td>=</td>";
        echo "<td>$resultado</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
    ?>
</body>
</html>
