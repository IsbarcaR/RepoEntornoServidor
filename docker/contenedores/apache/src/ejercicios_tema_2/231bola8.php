<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pregunta = $_POST["pregunta"];
    $respuestas = [
        "Sí", "No", "Quizás", "Claro que sí", "Por supuesto que no",
        "No lo tengo claro", "Seguro", "Yo diría que sí", "Ni de coña"
    ];

    // Seleccionar una respuesta aleatoria
    $respuesta = $respuestas[array_rand($respuestas)];

    // Mostrar la pregunta y la respuesta
    echo "<p>Pregunta: $pregunta</p>";
    echo "<p>Respuesta: $respuesta</p>";
}
?>
