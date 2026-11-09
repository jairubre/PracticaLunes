//A
<?php
//Comprobamos que selecionase un idioma 
if (isset($_POST["tipo"])) {
    //Le ponemos de nombre a la cookie el valor del idioma seleccionado 
    $cookie_name = $_POST["tipo"];
    //Comprabamos si ha marcado la checkbox
    if (empty($_POST["modo"])) {
        //Si la ha dejado vacia ponemos que esta en modo claro 
        $cookie_value = "claro";
    } else {
        //Si marca la checkbox añadimos el modo oscuro
        $cookie_value = $_POST["modo"];
    }
    //Definimos el nombre de la cookie con el nombre del idioma que selecionase el usuario y con el valor de en que modo en el que se va a ver la página web si claro o oscuro
    setcookie($cookie_name, $cookie_value, time() + 3600 * 24);
} else {
    //Si no selecciona un idioma le avisamos para que lo selecione
    echo "No has seleccionado un idioma para ver la página web, seleccione una de nuestras opciones";
}


?>

//B
/*

1. La información esta guardada en la cookie de su navegador y cuando la cookie llegue a el tiempo de expiración
será eliminada sabes que no la vas a tener siempre, que cuando tú quieras la puedes eliminar o con el temporizador 

2.Toda la información esta almacenada en la cookie no hace falta q te guardes nada en local todo esta ene el servidor, no pierdes espacio en local.
Al estar en la cookie puedes acceder a esos donde quieras ya que es un ratro que has dejado

3.Es mucho mas rápido coger los datos de la cookie del navegador que desde un fichero, el navegador accede a los datos de manera inmediata

4.Siempre que no elimines la cookie vas a tener los datos a tú disposición si pone que el tiempo de expiracion dure un año, los vas a tener durante un año,
tambien vas a pocer controlar las veces que entras o recargas la página




*/