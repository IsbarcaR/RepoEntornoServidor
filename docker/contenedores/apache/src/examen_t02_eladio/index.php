<?php
    include_once "./funciones.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Gestión de Asistencia a la Huelga Estudiantil</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="aulas">Número de aulas:</label>  <!-- Añadir un label para la entrada de número de aulas -->
        <input type="number" name="aulas" id="aulas" value="" />
        <input type="submit" value="Enviar" />
    </form>

    <?php
        if(isset($_POST['aulas'])){
            $aulas = $_POST['aulas'];
            echo "<h2>Número de aulas: ". $aulas ."</h2>";
            echo "<form action='#' method='post'>";
            for($i=1; $i<=$aulas; $i++){
                echo "<p>";
                echo "<label for='grupo". $i ."'>Nombre grupo ". $i .":</label> ";
                echo "<input type='text' name='grupos[]' id='grupo". $i ."' value='' />   ";
                echo "<label for='asistentes". $i ."'>nº asistentes: </label> ";
                echo "<input type='number' name='asistentes[]' id='asistentes". $i ."' value='' />";
                echo "</p>";
            }
            echo "<p><input type='submit' value='Enviar' /></p>";
            echo "</form>";
        }

        if(isset($_POST['grupos']) && isset($_POST['asistentes'])){
            $grupos = $_POST['grupos'];
            $asistentes = $_POST['asistentes'];

            echo "<br /><hr />";

            //print_r($grupos);
            //print_r($asistentes);

            $gruposAcortados = array_map("nombreCorto", $grupos);
            
            // Creación de array asociativo grupo => valor
            for ($i=0; $i<count($gruposAcortados) ; $i++) { 
                $registros[$gruposAcortados[$i]] = $asistentes[$i];
            }

            $gruposGrandes = array_filter($registros, fn($e) => $e > 5);
            echo "<p>Grupos con más de 5 asistentes:</p>";
            echo "<ul>";
            foreach ($gruposGrandes as $clave => $valor){
                echo "<li>$clave - $valor</li>";
            }
            echo "</ul>";
            echo "<br />";

            $totalAsistentes = array_reduce($registros, fn($acu, $e) => $acu + $e, 0);
            echo "<p>Total asistentes: $totalAsistentes</p>";
            echo "<br />";

            // Gráfico de barras ordenado de mayor a menor
            echo "<p>Gráfico de barras de mayor a menor:</p>";
            arsort($registros);
            echo "<table>";
            echo "<tr><th>Grupo</th><th>#</th><th>Asistentes</th></tr>";
            foreach($registros as $clave => $valor){
                echo "<tr><td>$clave</td><td>$valor</td>";
                echo "<td>". str_repeat("*", $valor) ."</td></tr>";
            }
            echo "</table>";
        }
    ?>
</body>
</html>
