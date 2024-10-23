<!-- ismael barranco-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Gestion de a asistencia de huelga estudiandtil </h1>
    <form method="get" action>
            Numero de aulas:<input type="number" id="numeroAulas" name="numeroAulas"  >
           <input type="submit" value="Enviar">
   
   

       </form>
       <?php
       // recibo numero aulas

        $numAulas=$_GET["numeroAulas"];
        echo " <h1>Numero de aulas: $numAulas </h1>";
        echo ' <form method="get" action="muestraResultados.php">';
        for ($i=1; $i<=$numAulas; $i++){
            echo ("<label for =aula $i> Nombre del grupo $i: <input type= 'text' value ='Nombre de aula' name='nombreAula[]' id='nombreAula$i'> Nº de asistentes : <input type='number' id='cantidad$i' name='cantidad[]' required></label><br>");

        }
        echo "<input type='submit' value='Enviar' >";
        echo "</form>";
        ?>
        
       
  
</body>
</html>