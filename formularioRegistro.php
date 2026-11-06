<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    /*if($_POST['usuario'] === "usuario" and $_POST["clave"] ==="1234"){
echo "Los datos de usuario y contraseña se han introducido correctamente";
}else{*/
    $err = true;
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['clave'];
    $color = $_POST['color'] ;
    $publicidad=$_POST['publicidad'] ?? '' ;

    //}

    if (!empty($usuario) || !empty($contraseña || !empty($publicidad) || !empty($color))) {
        echo "No se pueden tener los datos vacios";
    }
}
?>
<!DOCTYPE>
<html>

<head>
    <title>Formulario de registro</title>
    <meta charset="UTF-8">
</head>

<body>
    <?php if (isset($err)) {
        echo "<p> Revise los datos introducidos</p>";
    } ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="usuario">Usuario</label>
        <input value="<?php if (isset($usuario)) echo $usuario; ?>"
            id="usuario" name="usuario" type="text">
        <label for="clave">Clave</label>
        <input id="clave" name="clave" type="password">

        <hr>
        <b>RADIO:</b><br>

        <label>Naranja <input type="radio" name="color" value="rojo" <?php echo $color === 'rojo' ? 'checked' : ''; ?>></label>
        <label>Naranja <input type="radio" name="color" value="naranja" <?php echo $color === 'naranja' ? 'checked' : ''; ?>></label>
        <label>Naranja <input type="radio" name="color" value="verde" <?php echo $color === 'verde' ? 'checked' : ''; ?>></label>
        <hr>

        <b>CHECKBOX:</b><br>
        <label>Quiero recibir publicidad
           <input type="checkbox" name="publicidad" value="si" <?php if ($publicidad) echo 'checked'; ?>>
          
        </label>
        <hr>

        <input type="submit">
    </form>
</body>

</html>