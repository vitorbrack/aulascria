<?php
include_once  'C:/xampp/htdocs/academia/PHP/dao/daoProduto.php';
include_once 'C:/xampp/htdocs/academia/PHP/model/produto.php';


class ProdutoController {

    public function inserirProduto($nomeProduto, $vlrcompra, $vlrvenda, $qtdEstoque){

        $produto = new produto();

        $produto->setNomeProduto($nomeProduto);
        $produto->setVlrCompra($vlrcompra);
        $produto->setVlrVenda($vlrvenda);
        $produto->setQtdEstoque($qtdEstoque);
        

        $daoProduto = new DaoProduto();
        return $daoProduto -> inserir($produto);
    }

    //metedo para carregar a lista de produtos que vem da DAO
        public function listarProdutos(){
            $daoProduto = new DaoProduto();
            return $daoProduto ->listarProdutoDAO();
        }

public function excluirProduto($id){

    $daoProduto = new DaoProduto;
    $daoProduto->excluirProdutoDAO($id);
 }
   
 public function editarProduto($id){

     $daoProduto = new DaoProduto();
     return $daoProduto->editarProdutoDAO($id);

 }

 public function pesquisarProdutoId($id){
     $daoProduto = new DaoProduto
     return  $daoProduto->pesquisarProdutoIdDAO($id);
 }
}

