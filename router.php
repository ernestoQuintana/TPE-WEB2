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

//determina el camino a seguir con los links.
switch ($params[0]) {
    case 'productos':
        $controllers = new ProductosControllers;
        $controllers->showProductos();
    break;
    case 'categorias':
        $controllers = new ProductosControllers;
        $controllers->showCategorias();
    break;
    case 'rostro': case 'cuerpo' : case 'hombre' : case 'cabello':

        $controllers = new ProductosControllers;
        $controllers->showProductosByCategoria();
    break;
    case 'detalleProducto':
        $controllers = new ProductosControllers;
        $id= $params[1];
        $controllers->showDetalleProducto($id);
    break;
   /* case 'home': 
        showHome(); 
        break;
    
    case 'administrador':
        showAdministrador();
        break;*/
    default: 
        echo('404 Page not found'); 
        break;
}

?>