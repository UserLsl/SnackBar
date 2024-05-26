<?php

class UsuarioModel {

    private $id, $nome, $senha, $email;
    private $logado;

    public function __construct($email, $senha) {
        $this->email = $email;
        $this->senha = $senha;
    }

    public function verificarSenha() {

        include 'dao/UsuarioDAO.php';

        $dao = new UsuarioDAO();

        $sql = $dao->consultarUsuario($this->email);

        if ($sql->rowCount() > 0) {
            foreach ($sql->fetchall() as $user) {
                if ($user['senha'] == $this->senha) {
                    $_SESSION['nome'] = $user['nome'];
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['email'] = $user['email'];
                    $this->logado = true;
                } else {
                    $_SESSION['erro'] = 'E-mail ou senha incorretos!';
                    $this->logado = false;
                }
            }
        } else {
            $_SESSION['erro'] = 'Nenhuma conta encontrada para este e-mail!';
            $this->logado = false;
        }

        return $this->logado;
    }
}