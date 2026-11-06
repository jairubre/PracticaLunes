<?php
$usuarios = [
    'jairubre' => '0000',
    'hola'     => '1235',
    'adios' => '1234',
    'Pepe' => '1236',
    'juan' => '1239',
];

// Si alguien abre login.php sin enviar el formulario, lo mandamos al HTML
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: formulario.html");
}

$usuario = $_POST['usuario'];
$clave   = $_POST['clave'];
//Primera parte del if usuario se comprueba el array y me mira si existe ese usuario
//Y la segunda parte me comprueba si el usuario que ha escrito se le ha puesto la contraseña correcta
if (isset($usuarios[$usuario]) && $usuarios[$usuario] === $clave) {
    header("Location: principal.html");
} else {
    $err = true;
    $usuario = $_POST['usuario'];
    
    /*echo "<h1>Credenciales incorrectas</h1>
    <a href='formulario.html'> Return main page </a>";*/
}
