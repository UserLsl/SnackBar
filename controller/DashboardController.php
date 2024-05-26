<?php

class DashboardController {

    public static function dashboard() {
        include 'view/modules/Dashboard/Dashboard.php';
    }

    public static function deslogar() {

        include 'model/UsuarioModel.php';

        unset($_SESSION['id']);
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        session_unset();
        session_destroy();

        header("Location: /snackbar/index");
    }
}