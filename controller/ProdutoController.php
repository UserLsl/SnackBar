<?php

class ProdutoController extends Controller {

    public static function produtos() {

        parent::isProtected();

        include 'view/modules/Produtos/Produtos.php';
    }
}