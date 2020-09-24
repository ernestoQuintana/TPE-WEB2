<?php

require_once 'app\controllers\productos.controllers.php';
require_once 'RouterClass.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$r = new Router();

// rutas //por post solo viene cuandoe es una nueva tarea              
$r->addRoute("administrador", "GET", "ProductosControllers", "homeAdministrador");
$r->addRoute("allCategorias", "GET", "ProductosControllers", "showCategorias");
$r->addRoute("categoria/:ID", "GET", "ProductosControllers", "showProductosByCategoria");
$r->addRoute("detalleProducto/:ID", "GET", "ProductosControllers", "showDetalleProducto");
$r->addRoute("agregarProducto", "POST", "ProductosControllers", "agregarProducto");
$r->addRoute("eliminarProducto/:ID", "GET", "ProductosControllers", "eliminarProducto");
$r->addRoute("editarProducto", "POST", "ProductosControllers", "editarProducto");
//$r->addRoute("delete/:ID", "GET", "TasksController", "BorrarLaTaskQueVienePorParametro");
//$r->addRoute("completar/:ID", "GET", "TasksController", "MarkAsCompletedTask");

//Ruta por defecto.
//$r->setDefaultRoute("ProductosControllers", "administrador");
/*
//Advance
$r->addRoute("autocompletar", "GET", "TasksAdvanceController", "AutoCompletar");*/

//run
$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
