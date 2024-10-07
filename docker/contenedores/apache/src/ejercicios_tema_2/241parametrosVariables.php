<?php
    function mayor(): int
    {
        $args = func_get_args();
        $max = $args[0];
        foreach ($args as $arg) {
            if ($arg > $max) {
                $max = $arg;
            }
        }
        return $max;
    }

    function concatenar(...$palabras): string
    {
        return implode(' ', $palabras);// implode() concatena los elementos de un array en una cadena, separados por un separador especificado.
    }
    echo mayor(5, 12, 3, 9); // Salida: 12
    echo concatenar('Hola', 'mundo', 'PHP', 'es', 'genial'); // Salida: "Hola mundo PHP es genial"
    ?>
