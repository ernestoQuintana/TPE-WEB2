<?php

class helper {

    function checkLogin()
    {
        session_start();
        if (!isset($_SESSION['nombre'])) {
            header("Location: " . LOGIN);
            die();
        } else {
            if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 3600)) {
                header("Location: " . LOGOUT);
                die();
            }
            $_SESSION['LAST_ACTIVITY'] = time();
        }
    }

}