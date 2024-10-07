<?php
function peseta2euros($cantidad, $cotizacion = 166.36) {
    return $cantidad / $cotizacion;
}

function euros2pesetas($cantidad, $cotizacion = 166.36) {
    return $cantidad * $cotizacion;
}
?>
