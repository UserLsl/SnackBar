<?php

class CategoriaDAO {
    private $db;

    public function __construct() {
        include_once 'dao/Database.php';
        $pdo = new MySQL();
        $this->db = $pdo;
    }

    public function selecionarTodas() {
        $sql = $this->db->query("SELECT * FROM Categories");
        return $sql;
    }
}