<?php
// set the expiration date to one hour ago
setcookie("visitas", "", time() - 3600);
?>
<html>

<body>

    <?php
    echo "Cookie 'username' is deleted. <br>";
    foreach ($_COOKIE as $nombre => $valor) {
        echo htmlspecialchars($nombre) . " = " . htmlspecialchars($valor) . "<br>";
    }
    ?>

</body>

</html> 