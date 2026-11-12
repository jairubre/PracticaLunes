<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $cookie_name = "Colores";
   


    // 1. Comprobar si existe la cookie
    if (!isset($_COOKIE[$cookie_name])) {
        setcookie($cookie_name, $_POST["color"] ??= "", time() + (86400 * 30));
    } else {
        $color=$_COOKIE[$cookie_name];
        echo"Este es el color ".$color;
        if(!empty($color)){
               echo "<body style='background-color: " . $color . ";'>";
        }

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
            <input type="color" name="color" value="#ff0000">
            rojo
        </label>
        <input type="submit" value="Guardar">

    </form>
</body>

</html>