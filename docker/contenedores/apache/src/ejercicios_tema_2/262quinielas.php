<?php
// quinigol: Genera un array multidimensional con resultados aleatorios [012M, 012M].
function quinigol() {
    $opciones = ['0', '1', '2', 'M'];
    $resultados = [];
    for ($i = 0; $i < 6; $i++) {
        $resultados[] = [ $opciones[array_rand($opciones)], $opciones[array_rand($opciones)] ];
    }
    return $resultados;
}

// quiniela: Genera un array con 14 resultados aleatorios 1X2 y el pleno al quince [012M, 012M].
function quiniela() {
    $opciones = ['1', 'X', '2'];
    $resultados = [];

    // 14 resultados con 1X2
    for ($i = 0; $i < 14; $i++) {
        $resultados[] = $opciones[array_rand($opciones)];
    }

    // Pleno al quince [012M, 012M]
    $plenoQuince = quinigol();
    $resultados[] = $plenoQuince;

    return $resultados;
}

// tabla: Convierte el array de quiniela a una tabla HTML.
function tabla($quiniela) {
    $html = "<table border='1'>";
    $html .= "<tr><th>Partido</th><th>Resultado</th></tr>";

    // 14 partidos
    for ($i = 0; $i < 14; $i++) {
        $html .= "<tr><td>Partido " . ($i+1) . "</td><td>" . $quiniela[$i] . "</td></tr>";
    }

    // Pleno al quince
    $html .= "<tr><td>Pleno al 15</td><td>" . implode(' - ', $quiniela[14]) . "</td></tr>";

    $html .= "</table>";
    return $html;
}

// Mostrar la quiniela generada en una tabla
$quinielaGenerada = quiniela();
echo tabla($quinielaGenerada);
?>
