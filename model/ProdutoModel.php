<?php

class ProdutoModel {

    private $id, $nome, $desc, $valor, $status, $img, $categoria;

    public function __construct($nome, $desc, $valor, $categoria, $status, $img) {
        $this->nome = $nome;
        $this->desc = $desc;
        $this->valor = $valor;
        $this->categoria = $categoria;
        $this->status = $status;
        $this->img = $img;
    }

    public function cadastrarProduto() {
        include_once 'dao/ProdutoDAO.php';
        $dao = new ProdutoDAO();
        $dao->inserirProduto($this->categoria, $this->nome, $this->desc, $this->valor, $this->status, $this->img);
    }

    public function atualizarProduto($id) {
        include_once 'dao/ProdutoDAO.php';
        $dao = new ProdutoDAO();
        $dao->atualizarProduto($id, $this->categoria, $this->nome, $this->desc, $this->valor, $this->status, $this->img);
    }

    public static function excluirProduto($id) {
        include_once 'dao/ProdutoDAO.php';
        $dao = new ProdutoDAO();
        $dao->deletarProduto($id);
    }

    public static function selecionarProduto($id) {
        include_once 'dao/ProdutoDAO.php';
        $dao = new ProdutoDAO();
        $sql = $dao->selecionarProduto($id);
        
        if ($sql->rowCount() > 0) {
            return $sql->fetchall()[0];
        } else {
            return 'Nenhum registro encontrado!';
        }
    }

    public static function consultarTodos() {
        include_once 'dao/ProdutoDAO.php';
        $dao = new ProdutoDAO();

        $sql = $dao->selecionarTodos();

        if ($sql->rowCount() > 0) {
            return $sql->fetchall();
        } else {
            return 'Nenhum registro encontrado!';
        }
    }

    public static function verificarPedido($id) {
        include_once 'dao/ProdutoDAO.php';
        $dao = new ProdutoDAO();
        $sql = $dao->verificarPedido($id);

        return $sql;
    }
}