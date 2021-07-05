<?php
class produto{

    private $idproduto;
    private $nomeProduto;
    private $vlrCompra;
    private $vlrVenda;
    private $qtdEstoque;

    function setId($idproduto){
        $this->idproduto = $idproduto;
    }
    function getId(){
        return $this->idproduto;
    }
    function setnomeProduto($nomeProduto){
        $this->nomeProduto = $nomeProduto;
    }
    function getnomeProduto(){
        return $this->nomeProduto;
    }
    function setvlrCompra($vlrCompra){
        $this->vlrCompra = $vlrCompra;
    }
    function getvlrCompra(){
        return $this->vlrCompra;
    }
    function setvlrVenda($vlrVenda){
        $this->vlrVenda = $vlrVenda;
    }
    function getvlrVenda(){
        return $this->vlrVenda;
    }
    function setqtdEstoque($qtdEstoque){
        $this->qtdEstoque = $qtdEstoque;
    }
    function getqtdEstoque(){
        return $this->qtdEstoque;
    }


}


?>