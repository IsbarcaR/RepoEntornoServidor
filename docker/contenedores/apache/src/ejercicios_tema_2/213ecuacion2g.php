<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resolver Ecuación de 2º Grado</title>
</head>
<body>
    <?php
        // Obtener los coeficientes a, b y c desde la URL
        $a = isset($_GET['a']) ? (float)$_GET['a'] : 1; // Valor por defecto
        $b = isset($_GET['b']) ? (float)$_GET['b'] : -3; // Valor por defecto
        $c = isset($_GET['c']) ? (float)$_GET['c'] : 2; // Valor por defecto

        // Calcular el discriminante
        $D = ($b * $b) - (4 * $a * $c);

        // Determinar las soluciones basadas en el valor del discriminante
        if ($D > 0) {
            // Dos soluciones reales distintas
            $x1 = (-$b + sqrt($D)) / (2 * $a);
            $x2 = (-$b - sqrt($D)) / (2 * $a);
            echo "La ecuación tiene dos soluciones reales:<br>";
            echo "x1 = $x1<br>";
            echo "x2 = $x2<br>";
        } elseif ($D == 0) {
            // Una solución real doble
            $x = -$b / (2 * $a);
            echo "La ecuación tiene una solución real doble:<br>";
            echo "x = $x<br>";
        } else {
            // No tiene solución real
            echo "La ecuación no tiene soluciones reales.<br>";
        }
    ?>
</body>
</html>
