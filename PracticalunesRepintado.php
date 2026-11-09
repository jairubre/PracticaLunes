<?php

$users = [
    "jairubre" => ["clave" => "0000", "rol" => "admin"],
    "noesolte" => ["clave" => "1234", "rol" => "user"],


];

if ($_SERVER["REQUEST_METHOD"] === "POST") {


    if (isset($users[$_POST["usuario"]]) && $users[$_POST["usuario"]]["clave"] === $_POST["clave"]) {
        if ($users[$_POST["usuario"]]["rol"] === "admin") {
            header("location: admin.html");
            exit;
        } else {
            header("location: principal.html");
            exit;
        }
    }
} else {
    echo "Nos has introducido ningún dato en el inicio de sesion";
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repintado</title>
</head>

<body>

    <form action="PracticalunesRepintado.php" method="post">
        <label for="usuario">Usuario</label>
        <!--Con esta funcion hacemos el repintado y ponemos el ?? "" para que si el campo esta vacion no lo imprima-->
        <input name="usuario" type="text" value="<?php echo htmlspecialchars($_POST["usuario"]?? "") ?>">
        <br><BR></BR>
        <label for="clave">Clave</label>
        <input id="clave" name="clave" type="password">
        <br><BR></BR>
        <input type="submit" value="Incio Sesión">

    </form>

</body>

</html>