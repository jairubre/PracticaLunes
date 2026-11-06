<?php

$usuarios = [
    'jairubre' => ['clave' => '0000', 'rol' => 'admin'],
    'hola'     => ['clave' => '1235', 'rol' => 'user'],
    'adios'    => ['clave' => '1234', 'rol' => 'user'],
    'Pepe'     => ['clave' => '1236', 'rol' => 'user'],
    'juan'     => ['clave' => '1239', 'rol' => 'user'],
];

$usuario = $_POST['usuario'];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['registrar'])) {
    $clave = $_POST['clave'] ?? '';
 
    if ($usuario === '' || $clave === '') {
        $error = "Rellena usuario y clave";
    } else if (isset($_SESSION['usuarios'][$usuario])) {
        $error = "Ese usuario ya existe";
        header("Location: principal.html");
    } else {
        // Añadimos el nuevo usuario al array, siempre con rol user
        $_SESSION['usuarios'][$usuario] = ['clave' => $clave, 'rol' => 'user'];
 
         
        
    }

}

?>



<!DOCTYPE html>
<html>

<head>
    <title>Registro</title>
    <meta charset="UTF-8">
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="usuario">Usuario</label>

        <input value="<?php if (isset($usuario)) echo htmlspecialchars($usuario); ?>"
            id="usuario" name="usuario" type="text">
        <br><BR></BR>
        <label for="clave">Clave</label>
        <input id="clave" name="clave" type="password">
        <br><BR></BR>
        <input type="submit" value="Registro">
    </form>





</body>

</html>