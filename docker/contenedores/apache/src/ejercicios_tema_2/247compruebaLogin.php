<?php
$usuarios = [
    'user1' => 'password1',
    'user2' => 'password2',
    'admin' => 'admin123',
];

// Recibe los datos del formulario
$usuario = $_POST['usuario'] ?? '';
$password = $_POST['password'] ?? '';

if (isset($usuarios[$usuario])) {
    if ($usuarios[$usuario] === $password) {
        // Usuario y contraseña correctos
        include '247ok.php';
    } else {
        // Contraseña incorrecta
        $mensajeError = "La contraseña es incorrecta.";
        include '247ko.php';
    }
} else {
    // Usuario no existe
    $mensajeError = "El usuario no existe.";
    include '247ko.php';
}
?>
