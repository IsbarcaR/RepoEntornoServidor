<?php
// Ismael Barranco Carballo

// Función para generar nombre corto del grupo
function generarNombreCorto($nombre) {
    $partes = explode(' ', $nombre);
    $nombre_corto = '';
    foreach ($partes as $parte) {
        $nombre_corto .= strtoupper($parte[0]);
    }
    return $nombre_corto;
}

// Captura de datos enviados
$grupos = $_POST['grupos'];

// Filtrar los grupos que tienen más de 5 asistentes
$grupos_mas_de_5 = array_filter($grupos, function($grupo) {
    return $grupo['asistentes'] > 5;
});

// Contar el total de estudiantes que asistirán
$total_asistentes = array_reduce($grupos, function($carry, $grupo) {
    return $carry + $grupo['asistentes'];
}, 0);

// Ordenar los grupos por número de asistentes de mayor a menor
usort($grupos, function($a, $b) {
    return $b['asistentes'] - $a['asistentes'];
});
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de la Asistencia</title>
</head>
<body>
    <h2>Resultados de la Asistencia</h2>

    <!-- Mostrar lista de grupos con más de 5 asistentes -->
    <h3>Grupos con más de 5 estudiantes asistentes:</h3>
    <?php foreach ($grupos_mas_de_5 as $grupo): ?>
        <p><?= generarNombreCorto($grupo['nombre']) ?>: <?= $grupo['asistentes'] ?> asistentes</p>
    <?php endforeach; ?>

    <!-- Mostrar el número total de asistentes -->
    <h3>Total de estudiantes asistentes: <?= $total_asistentes ?></h3>

    <!-- Mostrar gráfico de barras con asteriscos -->
    <h3>Gráfico de Asistencia por Grupo (ordenado de mayor a menor):</h3>
    <?php foreach ($grupos as $grupo): ?>
        <p><?= generarNombreCorto($grupo['nombre']) ?> (<?= $grupo['asistentes'] ?> asistentes): <?= str_repeat('*', $grupo['asistentes']) ?></p>
    <?php endforeach; ?>
</body>
</html>
