<?php
session_start();

$usuario = $_SESSION["usuario"];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta</title>
</head>

<body>
    <h1>Bienvenido</h1>

    <p><?php echo htmlspecialchars($usuario["nombre"]) ?></p>
    <p><?php echo htmlspecialchars($usuario["apellido"]) ?></p>
    <p><?php echo htmlspecialchars($usuario["email"]) ?></p>
    <p><?php echo htmlspecialchars($usuario["telefono"]) ?></p>

</body>

</html>