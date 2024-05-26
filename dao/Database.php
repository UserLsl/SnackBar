<?php

class MySQL extends PDO {
    private $host = "localhost:3306";
    private $db = "snackbar";
    private $dbuser = "root";
    private $dbpass = "";

    public function __construct() {
        try {
            $dsn = "mysql:host=".$this->host.";dbname=".$this->db;
            $pdo = parent::__construct($dsn, $this->dbuser, $this->dbpass);
            return $pdo;
        } catch (PDOException $e) {
            echo "Falha ao conectar a base de dados";
        }
    }
}


