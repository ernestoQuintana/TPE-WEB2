<?php
require_once 'app\models\productos.model.php';
require_once 'app\models\categorias.model.php';
require_once 'api\view\Api.View.Producto.php';
require_once 'api\controllers\Api.Controllers.php';
require_once 'app\models\comentarios.model.php';

class ApiComentariosController extends ApiControllers { //hereda e implementa todo de api controllers

    private $model;
    private $modelProducto;
    private $view;


    function __construct(){

        parent::__construct(); // con esto termina de implementar el apicontrollers
        $this->model = new ModelComentarios();
        $this->modelProducto = new ModelProducto();
        $this->view = new ApiViewProducto();
        
    }

    function showComentarioPorProducto($params = null){
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
    
        $idUsuario = $params[':ID'];
        $body = $this->getData();
        $idComentario = $this->model->insertarComentario($body->titulo,$body->texto ,$body->puntuacion,$idUsuario);
        if(!empty($idComentario)){// verifica si la tarea existe
            $this->view->response($this->model->getComentarioId($idComentario), 201);
        }else{
            $this->view->response("La tarea no se pudo insertar", 404);
        }
       
    }
    function getComentario($params = null){
        $id = $params[':ID'];
        $comentario = $this->model->getComentarioId($id);
        var_dump($comentario);
      //  $this->view->response($comentario, 200);
    }
}