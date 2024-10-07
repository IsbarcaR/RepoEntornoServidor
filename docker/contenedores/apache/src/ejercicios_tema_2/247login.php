<?php
// Formulario de acceso
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de acceso</title>
</head>
<body>
    <h2>Iniciar sesión</h2>
    <form action="247compruebaLogin.php" method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" required><br><br>
        
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required><br><br>
        
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
