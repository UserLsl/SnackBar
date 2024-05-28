<?php

class UsuarioDAO {
    private $db;

    public function __construct() {
        include 'dao/Database.php';
        $pdo = new MySQL();
        $this->db = $pdo;
    }

    public function selecionarUsuario($email) {
        $sql = $this->db->query("SELECT * FROM Users WHERE userEmail = '".$email."';");
        return $sql;
    }
}