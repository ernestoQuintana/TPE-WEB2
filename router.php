<?php
/
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
    //case 'administrador':
      //  $controllers->homeAdministrador();
    //break;
    //case 'allCategorias':
      //  $controllers->showCategorias();
        // preguntar si hacemos otra funcion aparte o ponemos un if
       // $tipoCategoria = $params[1];
        //$controllers->showProductosByCategoria($tipoCategoria);
    //break;
    case 'categoria':
        $tipoCategoria = $params[1];
        $controllers->showProductosByCategoria($tipoCategoria);
    break;
    //case 'detalleProducto':
      //  $id= $params[1];
       // $controllers->showDetalleProducto($id);
    //break;
   // case 'agregar': 
      //  $controllers->agregarProducto(); 
    //break;
    case 'borrar':
        $id = $params[1]; 
        $controllers->borrarProducto($id); 
    break;
    /* case 'productos':
         $controllers->showProductos();
     break;
    case 'administrador':
        showAdministrador();
        break;*/
    default: 
        echo('404 Page not found'); 
        break;
}

?>