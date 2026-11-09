<?php

session_start();


if (!empty($_POST["user"]) && !empty($_POST["email"])) {
    $usuario = $_POST["user"];
    $email = $_POST["email"];

    $_SESSION["usuario"] = $usuario;
    $_SESSION["email"] = $email;
    print_r($_SESSION);
} else {
    echo "La sesión se esta iniciando";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de sesión</title>
</head>

<body>

    <h1>Inicio de sesión</h1>

    <form action="#" method="post">
        <label>
            Usuario
            <input type="text" name="user">
        </label>
        <br>
        <label>
            Email
            <input type="text" name="email">
        </label>
        <br>
        <input type="submit" value="Registro">





    </form>

</body>

</html>