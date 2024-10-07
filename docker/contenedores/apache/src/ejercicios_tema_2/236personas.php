<?php
// Crear un array de personas con nombre, altura y email
$personas = [
    ["nombre" => "Aitor", "altura" => 182, "email" => "aitor@correo.com"],
    ["nombre" => "Beatriz", "altura" => 165, "email" => "beatriz@correo.com"],
    ["nombre" => "Carlos", "altura" => 175, "email" => "carlos@correo.com"],
    ["nombre" => "Diana", "altura" => 160, "email" => "diana@correo.com"],
    ["nombre" => "Eduardo", "altura" => 170, "email" => "eduardo@correo.com"]
];

// Mostrar los datos en una tabla
echo "<table border='1'>";
echo "<tr><th>Nombre</th><th>Altura</th><th>Email</th></tr>";
foreach ($personas as $persona) {
    echo "<tr>";
    echo "<td>{$persona['nombre']}</td>";
    echo "<td>{$persona['altura']}</td>";
    echo "<td>{$persona['email']}</td>";
    echo "</tr>";
}
echo "</table>";
?>
