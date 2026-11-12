<?php
session_start();

// Solo pueden entrar administradores (rol 1)
if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 1) {
    header("Location: ExamenLogin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de administración</title>
</head>
<body>
    <h1>Bienvenido, <?= htmlspecialchars($_SESSION['usuario']) ?></h1>
    <p>Has accedido al panel de administración.</p>

    <a href="logout.php">Cerrar sesión y volver al login</a>
</body>
</html>