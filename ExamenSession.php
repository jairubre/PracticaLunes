//B
<?php
//Iniciamo la sesión
session_start();
//Comprobamos que el campo idioma esta relleno, tambien como lo primero que se ejecuta es el php cpmprobamos que esta relleno
if (isset($_POST["tipo"])) {
    //Nos creamos una varioable que guarde el idioma
    $idioma = $_POST["tipo"];
    //Comprobamos si ha marcado la checkbox
    if (empty($_POST["modo"])) {
        //Me creo un array usuario donde voy a guardar el idioma y el modo de la página web
        $usuario = [
            "idioma" => $idioma,
            //Como la checkbox esta vacia se lo pongo como preefinido en claro
            "modo" => "claro",

        ];
    } else {
        //Si marca la checkbox añadimos el modo oscuro
        //Me creo un array usuario donde voy a guardar el idioma y el modo de la página web
        $modo = $_POST["modo"];
        $usuario = [
            "idioma" => $idioma,
            //Como ha marcado la checkbox con el post recojo el modo oscuro y los guardo en el array
            "modo" => $modo,

        ];
    }
    //Defino la sesion de nombre usuario donde va a tener los campos de idioma y modo
    $_SESSION["usuario"] = $usuario;
    print_r($_SESSION);
} else {
    //Si no selecciona un idioma le avisamos para que lo selecione
    echo "Se esta iniciando la sesión";
}


?>

//B
/*

1.Toda la informacion esta en tu sesion, para poder acceder a tus datos tienen que conseguir tus claves de sesion para poder entrar

2.Toda la información esta almacenada en la sesion no hace falta q te guardes nada en local todo esta ene el servidor, no pierdes espacio en local.
Al estar en la cookie puedes acceder a esos donde quieras ya que es un ratro que has dejado

3.Es mucho mas rápido coger los datos de la sesion del navegador que desde un fichero, el navegador accede a los datos de manera inmediata

4.Siempre que no elimines la sesion vas a tener los datos a tú disposición




*/