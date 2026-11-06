<?php
$cookie_name = "username";
$cookie_value = "John Doe";
//Definimos la cookie, la primera vez que lo ejecutamos el valor todavia no esta definido
//Tenemos que recargar la pagina para que nos aparezca el valor de la cookie
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<html>

<body>
    <?php
    if (isset($_COOKIE[$cookie_name])) {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    } else {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    }
    ?>
</body>

</html>