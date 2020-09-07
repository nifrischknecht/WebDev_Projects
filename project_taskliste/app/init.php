<?php


//startet die Session Funktion. Muss zu oberst sein.
session_start();


//autoload function definieren
//(Klassen werden gesammelt und automatisch aufgerufen. So muss nicht für jede einzelne Klasse ein "require" gemacht werden
function my_autoload($class_name) {
    $file = "classes/$class_name.php";  //In Ordner "classes" kommen alle Klassen mit der Endung ".php"
    require_once($file);
}

//autoload function registrieren
spl_autoload_register('my_autoload');


//output buffering: html erst am schluss senden. Ermöglicht senden von headers irgendwo im code
ob_start();

//redirect funktion
function redirect($url = "", $exit = true)
{
    header("Location: $url");
    if ($exit) {
        exit;
    }
}


// Funktion die einen Array schön und strukturiert darstellt
function print_array($array)
{
echo '<pre>' . print_r($array, true) . '</pre>';
}


?>