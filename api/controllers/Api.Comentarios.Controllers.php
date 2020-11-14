<?php
require_once 'app\models\productos.model.php';
require_once 'app\models\categorias.model.php';
require_once 'api\view\Api.View.Producto.php';
require_once 'api\controllers\Api.Controllers.php';
require_once 'app\models\comentarios.model.php';

class ApiComentariosController extends ApiControllers { //hereda e implementa todo de api controllers

    private $model;
    private $view;


    function __construct(){

        parent::__construct(); // con esto termina de implementar el apicontrollers
        $this->model = new ModelComentarios();
        $this->view = new ApiViewProducto();
        
    }
    
    function showAllComentarios($params = null) { // PReguntar : Traer
        $id = $params[':ID'];
        $comentarios = $this->model->getComentariosPorProducto($id);
        $this->view->response($comentarios, 200);
    }
    
    function deleteComentario($params = null) {
        $id = $params[':ID'];
        $comentario = $this->model->DeleteComentarioDelModelo($id);

        if($comentario > 0)
            $this->view->response("El comentario con el id=$id fue eliminado", 200);
        else
            $this->view->response("El comentario con el id=$id no existe", 404);
    }


    function Insertcomentario($params = null){
        $id = $params[':ID'];
        $body = $this->getData();
        $idComentario = $this->model->insertarComentario($body->titulo,$body->texto ,$body->puntuacion);
        if(!empty($idComentario)){// verifica si la tarea existe
            $this->view->response($this->model->getComentarioId($idTask), 201);
        }else{
            $this->view->response("La tarea no se pudo insertar", 404);
        }
       
    }
}