<?php
$usuarios = [
    'jairubre' => ['clave' => '0000', 'rol' => 'admin'],
    'hola'     => ['clave' => '1235', 'rol' => 'user'],
    'adios'    => ['clave' => '1234', 'rol' => 'user'],
    'Pepe'     => ['clave' => '1236', 'rol' => 'user'],
    'juan'     => ['clave' => '1239', 'rol' => 'user'],
];

// Si alguien abre login.php sin enviar el formulario, lo mandamos al HTML
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = $_POST['usuario'];
    $clave   = $_POST['clave'];
    //Primera parte del if usuario se comprueba el array y me mira si existe ese usuario
    //Y la segunda parte me comprueba si el usuario que ha escrito se le ha puesto la contraseña correcta
    if (isset($usuarios[$usuario]) && $usuarios[$usuario]['clave'] === $clave) {

        if ($usuarios[$usuario]['rol'] === 'admin') {
            header("Location: admin.html");
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
        <input type="submit" value="Registro" formaction="registro.php">
    </form>

    
          
   
    
</body>

</html>