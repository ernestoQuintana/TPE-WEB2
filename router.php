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

$controllers = new ProductosControllers;

//determina el camino a seguir con los links.
switch ($params[0]) {
    case 'home': 
        $controllers->home(); 
    break;
    case '':
        $controllers->home();
    break;
    case 'productos':
        $controllers->showProductos();
    break;
    case 'allCategorias':
        $controllers->showCategorias();
        //$tipoCategoria = $params[1];
        //$controllers->showProductosByCategoria($tipoCategoria);
    break;
    case 'categoria':
        $tipoCategoria = $params[1];
        $controllers->showProductosByCategoria($tipoCategoria);
    break;
    case 'detalleProducto':
        $id= $params[1];
        $controllers->showDetalleProducto($id);
    break;

    /*
    case 'administrador':
        showAdministrador();
        break;*/
    default: 
        echo('404 Page not found'); 
        break;
}

?>