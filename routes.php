<?php
    require_once 'controller/LoginController.php';

    try {
        switch ($url) {
            case '/snackbar/index':
                LoginController::index();
                break;
            case '/snackbar/login':
                LoginController::logar();
                break;
            case '/snackbar/home':
                echo '<p>Home</p>';
                break;
            default:
                echo 'Erro 404';
                break;
        }
    } catch (Exception $e) {
        echo "Erro ".$e;
    }
?>