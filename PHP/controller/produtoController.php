<?php
include_once  'C:/xampp/htdocs/academia/PHP/dao/daoProduto.php';
include_once 'C:/xampp/htdocs/academia/PHP/model/produto.php';


class ProdutoController {

    public function inserirProduto($nomeProduto, $vlrcompra, $vlrvenda, $qtdEstoque){

        $produto = new produto();

        $produto->setnomeProduto($nomeProduto);
        $produto->setvlrCompra($vlrcompra);
        $produto->setvlrVenda($vlrvenda);
        $produto->setqtdEstoque($qtdEstoque);
        

        $daoProduto = new DaoProduto();
        return $daoProduto -> inserir($produto);
    }
}