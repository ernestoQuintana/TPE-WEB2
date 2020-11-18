<?php
    require_once 'app/models/admin.model.php';
class helper {

    private $model;

    function __construct()
    {
        $this->model =  new ModelAdmin();
    }

    function checkLogin()
    {
        session_start();
        if (!isset($_SESSION['nombre'])) {
             //si no hay una sesion iniciada anda a login
            header("Location: " . LOGIN);
            die();
        } else {
            if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 3600)) {
                header("Location: " . LOGOUT);
                die();
            }
            $_SESSION['LAST_ACTIVITY'] = time();
        }
        $nombre = $_SESSION['nombre'];
        $user = $this->model->getAdmin($nombre);
        return $user;
    }

}