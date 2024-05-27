<?php

class DashboardController extends Controller {

    public static function dashboard() {

        parent::isProtected();

        include 'view/modules/Dashboard/Dashboard.php';
    }

    public static function deslogar() {

        parent::isProtected();

        include 'model/UsuarioModel.php';

        unset($_SESSION['id']);
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        session_unset();
        session_destroy();

        header("Location: /snackbar/index");
    }
}