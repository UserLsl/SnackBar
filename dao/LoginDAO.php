<?php
// require 'config.php';

class LoginDAO {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function consultarUsuario($email) {
        $sql = $this->pdo->query("SELECT * FROM User WHERE email = '".$email."';");
        return $sql;
    }
}