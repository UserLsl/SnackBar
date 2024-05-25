<?php

class LoginController {

    public static function index() {
        include 'view/modules/Login/LoginForm.php';
    }

    public static function logar() {

        include 'model/UsuarioModel.php';

        $model = new UsuarioModel($_POST['email'], $_POST['senha']);
        $resultado = $model->verificarSenha();

        // $view = new LoginView();
        if ($resultado === true) {
            header("Location: /snackbar/home");
        } else {
            header("Location: /snackbar/index");
        }
    }
}