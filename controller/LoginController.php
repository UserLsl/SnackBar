<?php

class LoginController {

    public static function index() {

        include 'view/modules/Login/LoginForm.php';
    }

    public static function logar() {

        include 'model/UsuarioModel.php';

        $usuario = new UsuarioModel($_POST['email'], $_POST['senha']);
        $logado = $usuario->verificarSenha();

        if ($logado) {
            header("Location: /snackbar/dashboard");
        } else {
            header("Location: /snackbar/index");
        }
    }
}