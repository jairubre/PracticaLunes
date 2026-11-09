<?php
     
    $usuario=[
        "Jaime"=>"1234",
        "Noe"=>"0000",
    ];


    if ($_SERVER["REQUEST_METHOD"]!=="POST") {
        header("Location: practicaFormulario.html");
      exit;

    }


    $user=$_POST["usuario"] ?? "";
    $password=$_POST["clave"] ??"";
    //LLamamos al array en el primero miramos el campo user y en el segundo filtrando por user buscamos la clave
    if(isset($usuario[$user])&& $usuario[$user]===$password){
        header("Location: principal.html");
        exit;
    }else{
        $err=true;
        
    }








?>