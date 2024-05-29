<?php
    session_start();

    require_once 'controller/Controller.php';
    require_once 'controller/LoginController.php';
    require_once 'controller/DashboardController.php';
    require_once 'controller/ProdutoController.php';

    try {
        switch ($url) {
            case '/snackbar/index':
                LoginController::index();
                break;
            case '/snackbar/login':
                LoginController::logar();
                break;
            case '/snackbar/dashboard':
                DashboardController::dashboard();
                break;
            case '/snackbar/logout':
                DashboardController::deslogar();
                break;
            case '/snackbar/produtos':
                ProdutoController::produtos();
                break;
            case '/snackbar/produtos/inserir':
                ProdutoController::inserirProduto();
                break;
            case '/snackbar/produtos/editar':
                ProdutoController::editarProduto();
                break;
            case '/snackbar/produtos/excluir':
                ProdutoController::excluirProduto();
                break;
            default:
                echo 'Erro 404';
                break;
        }
    } catch (Exception $e) {
        echo "Erro ".$e;
    }
?>