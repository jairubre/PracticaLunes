<?php
session_start();

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];

$usuario = [
    "nombre" => $nombre,
    "apellido" => $apellido,
    "email" => $email,
    "telefono" => $telefono,

];
$_SESSION["usuario"] = $usuario;
header("Location: PracticaVerUsuario.php");
