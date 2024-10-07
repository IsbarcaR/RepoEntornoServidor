<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Error en el Login</title>
</head>
<body>
    <h1>Error en el acceso</h1>
    <?php if (isset($mensajeError)): ?>
        <p><?= htmlspecialchars($mensajeError) ?></p>
    <?php else: ?>
        <p>Ambos usuario y contraseña son incorrectos.</p>
    <?php endif; ?>

    <h2>Intenta nuevamente:</h2>
    <form action="247compruebaLogin.php" method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" required><br><br>
        
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required><br><br>
        
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
