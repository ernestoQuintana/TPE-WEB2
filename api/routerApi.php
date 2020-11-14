<?php
require_once 'RouterClass.php';
require_once 'api\controllers\Api.Controllers.php';

// instacio el router
$router = new Router();

// armo la tabla de ruteo de la API REST
$router->addRoute('comentarios/:ID', 'GET', 'ApiComentariosController', 'getComentario');
//$router->addRoute('comentarios/:ID', 'GET', 'ApiComentariosController', 'showComentarioPorProducto');
$router->addRoute('comentarios', 'POST', 'ApiComentariosController', 'insertComentario');
$router->addRoute('comentarios/:ID', 'DELETE', 'ApiComentariosController', 'deleteComentario');


$r->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);