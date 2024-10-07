<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $personas = $_POST['personas'];
    $alturas = array_column($personas, 'altura');
    
    $maxAltura = max($alturas);
    $minAltura = min($alturas);

    // Mostrar los datos en una tabla
    echo "<table border='1'>";
    echo "<tr><th>Nombre</th><th>Altura</th><th>Email</th></tr>";
    foreach ($personas as $persona) {
        $nombre = $persona['nombre'];
        $altura = $persona['altura'];
        $email = $persona['email'];
        
        if ($altura == $maxAltura) {
            echo "<tr style='background-color: lightblue;'>";
        } elseif ($altura == $minAltura) {
            echo "<tr style='background-color: lightgreen;'>";
        } else {
            echo "<tr>";
        }
        
        echo "<td>$nombre</td>";
        echo "<td>$altura</td>";
        echo "<td>$email</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
