<?php

class CategoriaModel {

    private $id, $nome;

    public function __construct($id, $nome) {
        $this->id = $id;
        $this->nome = $nome;
    }

    public static function consultarTodas() {

        include 'dao/CategoriaDAO.php';

        $dao = new CategoriaDAO();

        $sql = $dao->selecionarTodas();

        if ($sql->rowCount() > 0) {
            return $sql->fetchall();
        } else {
            return 'Nenhum registro encontrado!';
        }
    }
}