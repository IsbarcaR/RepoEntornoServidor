<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevas Funciones en PHP</title>
</head>
<body>
    <h1>Operadores y Estructuras Nuevas en PHP</h1>

    <h2>1. Operador Nave Espacial (<=>)</h2>
    <p>El operador nave espacial (<=>) se utiliza para comparar dos expresiones. Devuelve:</p>
    <ul>
        <li>1 si la izquierda es mayor que la derecha.</li>
        <li>0 si son iguales.</li>
        <li>-1 si la izquierda es menor que la derecha.</li>
    </ul>
    <p>
    <?php
        $a = 10;
        $b = 20;

        $resultado = $a <=> $b; // -1 porque $a es menor que $b
        echo "Resultado de \$a <=> \$b: " . $resultado . "<br>";

        $c = 20;
        $resultado2 = $b <=> $c; // 0 porque son iguales
        echo "Resultado de \$b <=> \$c: " . $resultado2 . "<br>";

        $d = 30;
        $resultado3 = $d <=> $b; // 1 porque $d es mayor que $b
        echo "Resultado de \$d <=> \$b: " . $resultado3 . "<br>";
    ?>
    </p>

    <h2>2. Operador de Fusión de Null (??)</h2>
    <p>El operador de fusión de null (??) devuelve el operando de la izquierda si este existe y no es null; de lo contrario, devuelve el operando de la derecha.</p>
    <p>
    <?php
        $nombre = null;
        $nombrePorDefecto = "Juan";

        // Usando el operador ??
        $resultadoNombre = $nombre ?? $nombrePorDefecto; // Devuelve "Juan"
        echo "Nombre: " . $resultadoNombre . "<br>";

        $edad = 25;
        $resultadoEdad = $edad ?? 18; // Devuelve 25
        echo "Edad: " . $resultadoEdad . "<br>";
    ?>
    </p>

    <h2>3. Instrucción match() en PHP 8</h2>
    <p>La instrucción match() es similar a switch, pero más estricta en cuanto a comparación y permite devolver valores directamente.</p>
    <p>
    <?php
        $color = "rojo";

        $resultadoColor = match($color) {
            "rojo" => "El color es rojo",
            "verde" => "El color es verde",
            "azul" => "El color es azul",
            default => "Color desconocido"
        };

        echo "Resultado del match: " . $resultadoColor . "<br>";
    ?>
    </p>

</body>
</html>
