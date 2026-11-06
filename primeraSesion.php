<?php
// Resume the session
session_start();
echo "Creamos la sesion <br>";
?>

<!DOCTYPE html>
<html>

<body>

    <?php
   
    $_SESSION["favcolor"] = "yellow";
    print_r($_SESSION);
    /*session_unset();
    echo"<br>";
    
    echo "Las variables de sesion han sido eliminadas <br>";

    // Elimina directamente al sesion
    session_destroy();

    echo "La sesion ha sido eliminada <br>";*/
    ?>

</body>

</html>