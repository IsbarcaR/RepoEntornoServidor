<?php
// Ismael Barranco Carballo
if (isset($_POST['num_grupos'])) {
    $num_grupos = $_POST['num_grupos'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de los Grupos</title>
</head>
<body>
    <h1>Formulario de Asistencia por Grupo</h1>
    <form method="POST" action="resultados.php">
        <?php for ($i = 1; $i <= $num_grupos; $i++): ?>
            <label for="grupo_<?= $i ?>">Nombre del grupo <?= $i ?>:</label>
            <input type="text" id="grupo_<?= $i ?>" name="grupos[<?= $i ?>][nombre]" required><br>
            <label for="asistentes_<?= $i ?>">Número de estudiantes que asistirán:</label>
            <input type="number" id="asistentes_<?= $i ?>" name="grupos[<?= $i ?>][asistentes]" required><br><br>
        <?php endfor; ?>
        <input type="submit" value="Mostrar Resultados">
    </form>
</body>
</html>
