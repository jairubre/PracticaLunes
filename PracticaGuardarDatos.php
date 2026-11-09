<?php
session_start();
echo"Este es el identificador de la sesión ".session_id() ."<br>";
$_SESSION["usuario"]="Noelia";
$_SESSION["email"]="Noe@gmail.com";

print_r($_SESSION);






?>