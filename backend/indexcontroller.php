<?php
// Configuración de idioma por defecto
$idioma_por_defecto = "en";


// Inicializa la variable $lenguaje
$lenguaje = $idioma_por_defecto;

// Obtén la URL de referencia
if (isset($_SERVER['HTTP_REFERER'])) {
    $url = $_SERVER['HTTP_REFERER'];
} else {
    $url = "/";
}


// Verifica si existe la cookie "lang"
if (isset($_COOKIE["lang"])) {
    $lenguaje = $_COOKIE["lang"];
    setcookie("lang", $lenguaje, time() + 365 * 24 * 60 * 60);
}

// Verifica si se proporciona un nuevo idioma en la URL y actualiza la cookie
if (isset($_REQUEST["lang"])) {
    $lenguaje = $_REQUEST["lang"];
    setcookie("lang", $lenguaje, time() + 365 * 24 * 60 * 60);
    // Redirige a la URL de referencia con el idioma seleccionado
    header('Location: ' . $url);   
}



?>