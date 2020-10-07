<?php

require_once 'app\controllers\productos.controllers.php';
require_once 'app\controllers\user.controllers.php';
require_once 'RouterClass.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
define('LOGIN', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/login');
define('LOGOUT', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/logout');
$r = new Router();

// rutas administrador      
//Prueba      

//rutas admin productos
//$r->addRoute("administrador", "GET", "ProductosControllers", "showAdmin");
$r->addRoute("allProductos", "GET", "ProductosControllers", "showProductosAdmin");
$r->addRoute("agregarProducto", "POST", "ProductosControllers", "agregarProducto");
$r->addRoute("eliminarProducto/:ID", "GET", "ProductosControllers", "eliminarProducto");
$r->addRoute("editarP/:ID", "GET", "ProductosControllers", "editarP");
$r->addRoute("editarProducto/:ID", "POST", "ProductosControllers", "editarProducto");//porque me queda en al URL EDITARP

//rutas admin categorias
$r->addRoute("allCategorias", "GET", "ProductosControllers", "showCategoriasAdmin"); 
$r->addRoute("agregarCategoria", "POST", "ProductosControllers", "agregarCategoria");
$r->addRoute("eliminarCategoria/:ID", "GET", "ProductosControllers", "eliminarCategoria");
$r->addRoute("editarC/:ID", "GET", "ProductosControllers", "editarC");
$r->addRoute("editarCategoria/:ID", "POST", "ProductosControllers", "editarCategoria");


//faltaria la parte del login del administrador
$r->addRoute("login", "GET", "UsersControllers", "login");
$r->addRoute("logout", "GET", "UsersControllers", "logout");
$r->addRoute("administrador", "POST", "UsersControllers", "verificarUsuario");

//rutas usuario
$r->addRoute("index", "GET", "ProductosControllers", "showIndex");
$r->addRoute("productos", "GET", "ProductosControllers", "showProductos");
$r->addRoute("detalleProducto/:ID", "GET", "ProductosControllers", "showDetalleProducto");
$r->addRoute("categoria/:ID", "GET", "ProductosControllers", "showProductosByCategoria");
$r->addRoute("allCategoriasUsuario", "GET", "ProductosControllers", "showCategoriasUsuario");


$r->setDefaultRoute("ProductosControllers", "showIndex");

//Advance
//$r->addRoute("autocompletar", "GET", "TasksAdvanceController", "AutoCompletar");

//run
$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
