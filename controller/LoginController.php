<?php

//Chama o model e view
require_once 'dao/LoginDAO.php';
require_once 'model/LoginModel.php';
require_once 'view/LoginView.php';

//Classe da model e view
class LoginController {
    private $model;
    private $view;
    private $dao;

    public function __construct($model, $view, $dao) {
        $this->model = $model;
        $this->view = $view;
        $this->dao = $dao;
    }

    public function logar($email, $senha) {
        $sql = $this->dao->consultarUsuario($email);
        $resultado = $this->model->verificarSenha($sql, $senha);
        if ($resultado === true) {
            $this->view->mostrarHome();
        } else {
            $this->view->mostrarErro($resultado);
        }
    }
}