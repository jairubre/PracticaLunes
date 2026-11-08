
    <?php
    if (isset($_COOKIE["Colores"])) {
        if ("azul" === $_COOKIE["Colores"]) {
            echo "<body style='background-color: #0c7ee9;'>";
        }
        if ("rojo" === $_COOKIE["Colores"]) {
            echo "<body style='background-color: #ff0d0d;'>";
        }
        if ("amarillo" === $_COOKIE["Colores"]) {
            echo "<body style='background-color: #f7e709;'>";
        }
    }




    ?>
