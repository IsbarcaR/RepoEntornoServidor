<?php 
    $clase=$_GET['nombreAula']; 
    $numAsistentes=$_GET['cantidad'];
    echo "<p>";
    echo "<h1> Muestra resultados</h1>";
    echo "Grupos con mas de 5 asistentes:" ;
    //mostrar aulas con mas de 5 asistentes 
    foreach($numAsistentes as $key => $value){
        if($value>5){
            echo "<br>  $clase[$key] con $value asistentes";
        }
    }
    echo "</p>";
    //muestra total de asistentes
    echo "<p>";
    echo "<br> Total de asistentes: ".array_sum($numAsistentes);
    echo "</p>";
    //mostrar  grafico de assitentes clase con asteriscos 
    echo "<br> Grafico de asistentes:<br>";
    $j=0;
    foreach($numAsistentes as $value){
        //mostrar aulas 
        echo $clase[$j].": ";
        for($i=0;$i<$value;$i++){
            echo "*";
        }
        $j++;
        
        echo "<br>";
    }



   
  
   ?>
  

