<?php

session_start();

foreach($_SESSION as $clave=>$valor){
   echo "Clave ".$clave." valor ".$valor." ";
}

session_destroy();



?>