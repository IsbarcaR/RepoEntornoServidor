<?php
include '243biblioteca.php';

$a = $_GET['a'] ?? 0;
$b = $_GET['b'] ?? 0;

$funciones = ['sumar', 'restar', 'multiplicar', 'dividir'];

foreach ($funciones as $func) {
    echo ucfirst($func) . " de $a y $b: " . $func($a, $b) . "<br>";
}
?>
