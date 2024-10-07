<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cantidad = intval($_POST["cantidad"]);
    
    echo "<form action='238gestionarPersonas.php' method='POST'>";
    
    for ($i = 0; $i < $cantidad; $i++) {
        echo "<h3>Persona ". $i+1 ."</h3>";
        echo "<label for='nombre_$i'>Nombre: </label>";
        echo "<input type='text' id='nombre_$i' name='personas[$i][nombre]' required><br>";
        
        echo "<label for='altura_$i'>Altura (cm): </label>";
        echo "<input type='number' id='altura_$i' name='personas[$i][altura]' required><br>";
        
        echo "<label for='email_$i'>Email: </label>";
        echo "<input type='email' id='email_$i' name='personas[$i][email]' required><br><br>";
    }
    
    echo "<button type='submit'>Enviar</button>";
    echo "</form>";
}
?>
