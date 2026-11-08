<?php


if(!isset($_COOKIE['username'])){
    setcookie("username","1",time() +3600*24);
    echo"Bienvenido a la primera visita de la pagina";
}else{
    $visitas=(int)$_COOKIE['username'];
    $visitas++;
    setcookie("username",$visitas,time()+3600*24);
    echo"Bienvencido por ".$visitas." a la página web";
}



?>