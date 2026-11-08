<?php

$cookie_name = "username";
$cookie_value = "Jaime";


setcookie($cookie_name, $cookie_value, time() + (86400 * 30));


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>

<body>
    <?php

    if (!isset($_COOKIE[$cookie_name])) {
        echo "Esta es la cookie " . $cookie_value . " Y estas son sus visitas 1";
    } else {
        $visitas = (int)$_COOKIE[$cookie_name];
        $visitas++;
        echo "Estas son las visitas de la página " . $visitas;
    }
    

    ?>

</body>

</html>