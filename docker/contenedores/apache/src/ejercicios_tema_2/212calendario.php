<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
</head>
<body>
    <?php
        // Recibir día, mes y año desde la URL
        $dia = isset($_GET['dia']) ? (int)$_GET['dia'] : 1; // Valor por defecto es 1
        $mes = isset($_GET['mes']) ? (int)$_GET['mes'] : 1; // Valor por defecto es 1
        $anyo = isset($_GET['anyo']) ? (int)$_GET['anyo'] : 2024; // Valor por defecto es 2024

        // Definición del número de días en cada mes (sin considerar años bisiestos)
        $diasEnMes = [
            1 => 31, // Enero
            2 => 28, // Febrero
            3 => 31, // Marzo
            4 => 30, // Abril
            5 => 31, // Mayo
            6 => 30, // Junio
            7 => 31, // Julio
            8 => 31, // Agosto
            9 => 30, // Septiembre
            10 => 31, // Octubre
            11 => 30, // Noviembre
            12 => 31  // Diciembre
        ];

        // Aumentar el día
        $dia++;

        // Comprobar si el día excede el número de días en el mes
        if ($dia > $diasEnMes[$mes]) {
            $dia = 1; // Reiniciar el día
            $mes++; // Pasar al siguiente mes
            
            // Comprobar si el mes excede 12
            if ($mes > 12) {
                $mes = 1; // Reiniciar el mes
                $anyo++; // Incrementar el año
            }
        }

        // Mostrar la nueva fecha
        echo "La fecha dentro de un día será: $dia/$mes/$anyo";
    ?>
</body>
</html>
