<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $filas=$_GET['filas']?:4;
        $columnas=$_GET['columnas']?:4;
        echo '<table border="1">';
        for($i=0; $i<$filas; $i++) {
            echo '<tr>';
            for($j=0; $j<$columnas; $j++) {
                echo "<td> $i, $j </td>";
            }
            echo '</tr>';
        }
        echo '</table>';



    ?>
</body>
</html>