<?php

class UsuarioDAO {
    private $db;

    public function __construct() {
        include 'dao/Database.php';
        $pdo = new MySQL();
        $this->db = $pdo;
    }

    public function inserirUsuario(UsuarioModel $model) {

    }

    public function consultarUsuario($email) {
        $sql = $this->db->query("SELECT * FROM User WHERE email = '".$email."';");
        return $sql;
    }
}