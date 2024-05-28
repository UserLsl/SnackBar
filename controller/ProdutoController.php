<?php

class ProdutoController extends Controller {

    public static function produtos() {

        parent::isProtected();

        include 'model/ProdutoModel.php';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $produto = new ProdutoModel($_POST['Nome'], $_POST['Descricao'], $_POST['Valor'], $_POST['Categoria'], "A", "");
            $produto->cadastrarProduto();
        }

        $produtos = ProdutoModel::consultarTodos();

        include 'model/CategoriaModel.php';
        $categorias = CategoriaModel::consultarTodas();

        include 'view/modules/Produtos/Produtos.php';
    }
}