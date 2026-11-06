<?php
//Cuando ponemos el true es para q solo podamos acceder por https
setcookie('nueva', "valor", time() + 30, "", "", true);
echo $_COOKIE["nueva"] ?? "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie</title>
</head>

<body>
    <h1>Gestiones de cookies</h1>
    <?php
    if (isset($_COOKIE["nueva"])) {
        echo "<br> nueva: " . htmlspecialchars($_COOKIE["nueva"]);
    } else {
        echo "Hola has recarcado la página";
    }
    ?>
</body>

</html>