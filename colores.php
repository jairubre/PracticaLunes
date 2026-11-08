<?php
if (isset($_POST["color"])) {
    $cookie_name = "Colores";
    $cookie_color = $_POST["color"];
    setcookie($cookie_name, $cookie_color, time() + (86400 * 30));
    if ($cookie_color === "azul") {
        header("Location: Paginacolor.php");
        exit;
    }
    if ($cookie_color === "rojo") {
        header("Location: Paginacolor.php");
    }
    if ($cookie_color === "amarillo") {
        header("Location: Paginacolor.php");
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predicodico</title>
</head>

<body>


    <form method="post" action="">
        <p>Colores</p>
        <label>
            <input type="radio" name="color" value="rojo" <?php $tipo = "rojo" ? "checked" : "" ?>>
            rojo
        </label>
        <br>
        <label>
            <input type="radio" name="color" value="azul" <?php $tipo = "azul" ? "checked" : "" ?>>
            azul
        </label>
        <br>
        <label>
            <input type="radio" name="color" value="amarillo" <?php $tipo = "amarillo" ? "checked" : "" ?>>
            Amarillo
        </label>
        <br>
        <input type="submit" value="Guardar">


    </form>

</body>

</html>