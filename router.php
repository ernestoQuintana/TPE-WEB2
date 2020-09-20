<?php

require_once 'app\controllers\productos.controllers.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

//lee la accion
if(!empty($_GET['action'])){
    $action = $_GET['action'];
} else {
    $action = 'home'; //accion por defecto si no se envia
}
// parsea la accion Ej suma/1/2 >>> ['suma' , 1, 2]
$params = explode('/',$action);
//var_dump($params);

//determina el camino a seguir con los links.
switch ($params[0]) {
    case 'home': 
        showHome(); 
        break;
    case 'productos':
        showProductos();
        break;
    case 'rostro': 
        showRostro(); 
        break;
    case 'cuerpo': 
        showCuerpo(); 
        break;
    case 'hombre': 
        showHombre(); 
        break;
    case 'cabello': 
        showCabello(); 
        break;
    case 'administrador':
        showAdministrador();
        break;
/*
    case 'about': 
        if (isset($params[1]))
         showAbout($params[1]); 
        else
            showAbout();
        break;*/
    default: 
        echo('404 Page not found'); 
        break;
}

?>