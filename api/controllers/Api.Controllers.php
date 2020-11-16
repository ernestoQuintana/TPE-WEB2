<?php
require_once 'api\view\Api.View.Producto.php';
require_once 'app\models\comentarios.model.php';

abstract class ApiControllers{

    protected $model; // lo instancia el hijo
    protected $view;

    private $data; 

    public function __construct() {
        $this->model = new ModelComentarios();
        $this->view = new ApiViewProducto();
        $this->data = file_get_contents("php://input"); 
    }

    function getData(){ 
        return json_decode($this->data); 
    }  
}