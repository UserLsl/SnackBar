<?php
session_start();

class LoginModel {

    private $logado;

    public function verificarSenha($sql, $senha) {
        if ($sql->rowCount() > 0) {
            foreach ($sql->fetchall() as $user) {
                if ($user['senha'] == $senha) {
                    $_SESSION['nome'] = $user['nome'];
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['email'] = $user['email'];
                    $this->logado = true;
                } else {
                    $this->logado = 'E-mail ou senha incorretos!';
                }
            }
        } else {
            $this->logado = 'Nenhuma conta encontrada para este e-mail!';
        }

        return $this->logado;
    }
}