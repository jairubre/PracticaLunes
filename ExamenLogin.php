<?php

$usuarios = [
    'jairubre' => ['clave' => '0000', 'rol' => 1],
    'Alex'     => ['clave' => '1235', 'rol' => 0],
    'Ross'    => ['clave' => '1234', 'rol' => 1],
    'Pepe'     => ['clave' => '1236', 'rol' => 0],
    'juan'     => ['clave' => '1239', 'rol' => 1],
];

// Si alguien abre login.php sin enviar el formulario, lo mandamos al HTML
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $usuario = $_POST['usuario'];
    $clave   = $_POST['clave'];
    //Primera parte del if usuario se comprueba el array y me mira si existe ese usuario
    //Y la segunda parte me comprueba si el usuario que ha escrito se le ha puesto la contraseña correcta
    if (isset($usuarios[$usuario]) && $usuarios[$usuario]['clave'] === $clave) {

        if ($usuarios[$usuario]['rol'] === 1) {
            header("Location: admin.php");
            $_SESSION['usuario'] = $usuario;
            $_SESSION['rol'] = $usuarios[$usuario]['rol'];
        } else {
            header("Location: principal.html");
        }
    } else {
        $err = true;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Formulario de login</title>
    <meta charset="UTF-8">
</head>

<body>
    <?php if (isset($err)) {
        echo "<p> Revise usuario y contraseña</p>";
    } ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="usuario">Usuario</label>

        <input value="<?php if (isset($usuario)) echo htmlspecialchars($usuario); ?>"
            id="usuario" name="usuario" type="text">
        <br><BR></BR>
        <label for="clave">Clave</label>
        <input id="clave" name="clave" type="password">
        <br><BR></BR>
        <input type="submit" value="Incio Sesión">

    </form>


</body>

</html>