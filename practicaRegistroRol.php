<?php

$users=[

    "jairubre"=>["clave"=>"0000","rol"=>"admin"],
    "noesolte"=>["clave"=>"1234","rol"=>"user"],

];

if ($_SERVER["REQUEST_METHOD"]!=="POST") {
    echo"No has introducido los datos de usuario para poder ver tú rol";
}else{
    $user=$_POST["usuario"];
    $password=$_POST["clave"];

    if(isset($user)&&isset($password)){
        //Ponemos el isset en el aaray para comprobar si existe el usuario y asi no nos sale el warning y no hace falta 
        //ponerlo en la segunda porque ya lo coprobamos en la primera
        if(isset($users[$user]) && $users[$user]["clave"]===$password){
            if($users[$user]["rol"]==="admin"){
                header("Location: admin.html");
                exit;
            }else{
                header("Location: principal.html");
                exit;
            }
        }
        echo"El usario no esta registrado";
    }else{
        echo"Los campos estan vacios";
    }
}








?>