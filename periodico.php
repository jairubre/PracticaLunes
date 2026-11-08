<?php
if (isset($_POST["tipo"])) {
    $cookie_name = "Titular";
    $cookie_valor = $_POST["tipo"];

    setcookie($cookie_name, $cookie_valor, time() + (86400 * 30));
    echo"<h1>$cookie_valor</h1>";
    
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
        <p>Titulares</p>
        <label>
            <input type="radio" name="tipo" value="politica" <?php $tipo = "politica" ? "checked" : "" ?>>
            Politica
        </label>
        <br>
        <label>
            <input type="radio" name="tipo" value="economia" <?php $tipo = "economia" ? "checked" : "" ?>>
            Economia
        </label>
        <br>
        <label>
            <input type="radio" name="tipo" value="deportes" <?php $tipo = "deportes" ? "checked" : "" ?>>
            deportes
        </label>
        <br>
        <input type="submit" value="Guardar">


    </form>

</body>

</html>