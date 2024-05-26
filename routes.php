<?php
    session_start();

    require_once 'controller/LoginController.php';
    require_once 'controller/DashboardController.php';

    try {
        switch ($url) {
            case '/snackbar/index':
                LoginController::index();
                break;
            case '/snackbar/login':
                LoginController::logar();
                break;
            case '/snackbar/dashboard':
                if (!isset($_SESSION['id'])) {
                    header("Location: /snackbar/index");
                } else {
                    DashboardController::dashboard();
                }
                break;
            case '/snackbar/logout':
                DashboardController::deslogar();
                break;
            default:
                echo 'Erro 404';
                break;
        }
    } catch (Exception $e) {
        echo "Erro ".$e;
    }
?>