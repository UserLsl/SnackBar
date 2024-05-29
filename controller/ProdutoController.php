<?php

class ProdutoController extends Controller
{

    public static function produtos()
    {

        parent::isProtected();

        include_once 'model/ProdutoModel.php';

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            if (isset($_GET['id']) && empty($_GET['id']) == false) {
                $produto = ProdutoModel::selecionarProduto($_GET['id']);
            }
        }

        $produtos = ProdutoModel::consultarTodos();

        include_once 'model/CategoriaModel.php';
        $categorias = CategoriaModel::consultarTodas();

        include_once 'view/modules/Produtos/Produtos.php';
    }

    public static function inserirProduto()
    {

        parent::isProtected();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $diretorio = "img/";
            $extensao = strtolower(substr($_FILES['Imagem']['name'], -4));
            $novo_nome = md5(time()) . $extensao;

            if (move_uploaded_file($_FILES['Imagem']['tmp_name'], $diretorio . $novo_nome)) {
                $caminhoImagem = "../../" . $diretorio . $novo_nome;
                include_once 'model/ProdutoModel.php';
                $prod = new ProdutoModel($_POST['Nome'], $_POST['Descricao'], $_POST['Valor'], $_POST['Categoria'], "A", $caminhoImagem);
                $prod->cadastrarProduto();
            }
        }
        header("Location: /snackbar/produtos");
    }

    public static function editarProduto()
    {

        parent::isProtected();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $diretorio = "img/";
            $extensao = strtolower(substr($_FILES['Imagem']['name'], -4));
            $novo_nome = md5(time()) . $extensao;
            $caminhoImagem = "";

            if (move_uploaded_file($_FILES['Imagem']['tmp_name'], $diretorio . $novo_nome)) {
                $caminhoImagem = "../../" . $diretorio . $novo_nome;
            }
            
            include_once 'model/ProdutoModel.php';
            $prod = new ProdutoModel($_POST['Nome'], $_POST['Descricao'], $_POST['Valor'], $_POST['Categoria'], "A", $caminhoImagem);
            $prod->atualizarProduto($_POST['Id']);
        }
        header("Location: /snackbar/produtos");
    }


    public static function selecionarProduto()
    {

        parent::isProtected();

        $produtos = ProdutoModel::consultarTodos();

        include_once 'model/CategoriaModel.php';
        $categorias = CategoriaModel::consultarTodas();

        include_once 'view/modules/Produtos/Produtos.php';
        header("Location: /snackbar/produtos");
    }

    public static function excluirProduto()
    {

        parent::isProtected();

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            include 'model/ProdutoModel.php';
            $sql =ProdutoModel::verificarPedido($_GET['id']);

            if ($sql->rowCount() > 0) {
                $_SESSION['erro'] = 'Produto já se encontra em pedido, não pode ser deletado!';
            } else {
                ProdutoModel::excluirProduto($_GET['id']);
            }
            
        }
        header("Location: /snackbar/produtos");
    }
}
