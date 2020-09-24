<?php

require_once 'app\controllers\productos.controllers.php';
require_once 'RouterClass.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$r = new Router();

// rutas //por post solo viene cuandoe es una nueva tarea              
$r->addRoute("administrador", "GET", "ProductosControllers", "homeAdministrador");
/*$r->addRoute("mermelada", "GET", "TasksController", "Home");

//Esto lo veo en TasksView
$r->addRoute("insert", "POST", "TasksController", "InsertTask");

$r->addRoute("delete/:ID", "GET", "TasksController", "BorrarLaTaskQueVienePorParametro");
$r->addRoute("completar/:ID", "GET", "TasksController", "MarkAsCompletedTask");
*/
//Ruta por defecto.
$r->setDefaultRoute("ProductosControllers", "administrador");
/*
//Advance
$r->addRoute("autocompletar", "GET", "TasksAdvanceController", "AutoCompletar");*/

//run
$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
