<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $cantidad=$_GET['cantidad']?:10;
        (int)$cantidad;
     
        echo "<form method='get' action='224sumarDatos.php'>";
        for ($i = 1; $i <= $cantidad; $i++) {
            echo "<label for='campo$i'>Campo $i:</label>";
            echo "<input type='text' id='campo$i' name='campo[]' required><br><br>";
        }

        echo "<input type='submit' value='Enviar'>";
        echo "</form>";
        ?>
</body>
</html>