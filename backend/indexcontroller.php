<?php 
$url = $_SERVER['HTTP_REFERER'];
    if(!isset ($_COOKIE["lang"])){
    setcookie("lang","en", time() + (365 * 24 * 60 * 60));
    header('location:' . $url . '');
    
}
else{
    $lenguaje = $_COOKIE["lang"];
    }
    

    //isset verifica que la variable exista, sin dar error
    //regresa true or false
    //Verificar si existe ?lang=en ó ?lang=es en la url
    if (isset($_REQUEST["lang"])) {
    //Si existe, creamos una cookie con ese valor,
    //para que la siguiente vez que el cliente entre,
    //ya tengamos una cookie con el último idioma que eligió
    $lenguaje = $_REQUEST["lang"];
    setcookie("lang", $lenguaje, time() + (365 * 24 * 60 * 60));
    header('location:' . $url . '');


    }

    
    
?>
