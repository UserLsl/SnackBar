<?php

class ProdutoDAO {
    private $db;

    public function __construct() {
        include_once 'dao/Database.php';
        $pdo = new MySQL();
        $this->db = $pdo;
    }

    public function selecionarTodos() {
        $sql = $this->db->query("SELECT * FROM Products INNER JOIN Categories ON Products.categoryId = Categories.categoryId;");
        return $sql;
    }

    public function inserirProduto($categoria, $nome, $desc, $valor, $status, $img) {
        $sql = "INSERT INTO Products (categoryId, productName, productDesc, productValue, productStatus, ProductImage) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$categoria, $nome, $desc, $valor, $status, $img]);
    }

    public function atualizarProduto($id, $categoria, $nome, $desc, $valor, $status, $img) {
        if ($img <> "") {
            $sql = "UPDATE Products SET categoryId=?, productName=?, productDesc=?, productValue=?, productStatus=?, ProductImage=? WHERE productId=?";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([$categoria, $nome, $desc, $valor, $status, $img, $id]);
        } else {
            $sql = "UPDATE Products SET categoryId=?, productName=?, productDesc=?, productValue=?, productStatus=? WHERE productId=?";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([$categoria, $nome, $desc, $valor, $status, $id]);
        }
    }

    public function selecionarProduto($id) {
        $sql = $this->db->query("SELECT * FROM Products INNER JOIN Categories ON Products.categoryId = Categories.categoryId WHERE productId = ".$id.";");
        return $sql;
    }

    public function deletarProduto($id) {
        $this->db->query("DELETE FROM Products WHERE productId = ".$id.";");
    }

}