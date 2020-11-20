<?php
require_once 'RouterClass.php';
require_once './api/controllers/Api.Comentarios.Controllers.php';
//require_once 'api\controllers\Api.Controllers.php';

// instacio el router
$router = new Router();

// armo la tabla de ruteo de la API REST

$router->addRoute('productos/:ID/comentarios', 'GET', 'ApiComentariosController', 'showComentarioPorProducto');
$router->addRoute('comentarios', 'POST', 'ApiComentariosController', 'insertComentario');
$router->addRoute('comentarios/:ID', 'DELETE', 'ApiComentariosController', 'deleteComentario');


$router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);