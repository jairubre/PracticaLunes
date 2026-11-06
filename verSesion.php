<?php
//Tenemos que inicair sesion
session_start();

foreach ($_SESSION as $nombre => $valor) {
    //Con este echo podemos ver el nombre de la sesion y su valor 
    echo "Este es el nombre de la sesion " . $nombre." = ".htmlspecialchars($valor);
}
//Esto lo susamor para borrar las variables de la sesion
session_unset();
foreach ($_SESSION as $nombre => $valor) {
    //Con este echo podemos ver el nombre de la sesion y su valor 
    echo "Este es el nombre de la sesion " . $nombre." = ".htmlspecialchars($valor);
}
if( empty($_SESSION)){
    echo"Las sesion tiene las variables vacias";
}
//Eliminamos la sesion
//session_destroy();
?>
