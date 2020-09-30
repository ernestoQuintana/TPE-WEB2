<?php

require_once 'app\controllers\productos.controllers.php';
require_once 'RouterClass.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$r = new Router();

// rutas administrador //por post solo viene cuandoe es una nueva tarea              

//rutas admin productos
$r->addRoute("administrador", "GET", "ProductosControllers", "showAdmin");
$r->addRoute("allProductos", "GET", "ProductosControllers", "showProductosAdmin");
$r->addRoute("agregarProducto", "POST", "ProductosControllers", "agregarProducto");
$r->addRoute("eliminarProducto/:ID", "GET", "ProductosControllers", "eliminarProducto");
$r->addRoute("editarP/:ID", "GET", "ProductosControllers", "editarP");
$r->addRoute("editarProducto", "GET", "ProductosControllers", "editarProducto");
//rutas admin categorias
$r->addRoute("administrador/allCategorias", "GET", "ProductosControllers", "showCategoriasAdmin"); //preguntar si esta bien 
$r->addRoute("agregarCategoria", "POST", "ProductosControllers", "agregarCategoria");
$r->addRoute("eliminarCategoria/:ID", "GET", "ProductosControllers", "eliminarCategoria");
$r->addRoute("editarCategoria/:ID", "GET", "ProductosControllers", "editarCategoria");


//faltaria la parte del login del administrador

//rutas usuario
$r->addRoute("home", "GET", "ProductosControllers","showHome");
$r->addRoute("productos", "GET", "ProductosControllers", "showProductos");
$r->addRoute("detalleProducto/:ID", "GET", "ProductosControllers", "showDetalleProducto");
$r->addRoute("categoria/:ID", "GET", "ProductosControllers", "showProductosByCategoria");
$r->addRoute("allCategoriasUsuario", "GET", "ProductosControllers", "showCategoriasUsuario");

//Ruta por defecto.
//$r->setDefaultRoute("ProductosControllers", "home");
/*
//Advance
$r->addRoute("autocompletar", "GET", "TasksAdvanceController", "AutoCompletar");*/

//run
$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
