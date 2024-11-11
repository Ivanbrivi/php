<?php
session_start();

// Redirigir a usuarios logueados a la página de usuarios
if (isset($_SESSION['user_id'])) {
    header("Location: users.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Bienvenido a la Aplicación</h1>
    <p>Por favor, <a href="login.php">inicia sesión</a> o <a href="register.php">regístrate</a> para continuar.</p>
</div>
</body>
</html>