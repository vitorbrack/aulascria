<?php
class produto{

    private $id;
    private $nome;
    private $vlrCompra;
    private $vlrVenda;
    private $qtdEstoque;

    function setId($id){
        $this->id = $id;
    }
    function getId(){
        return $this->id;
    }
    function setnome($nome){
        $this->nome = $nome;
    }
    function getnome(){
        return $this->nome;
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