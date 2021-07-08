<?php
include_once  'C:/xampp/htdocs/academia/PHP/dao/daoLivro.php';
include_once 'C:/xampp/htdocs/academia/PHP/model/livro.php';

class LivroController{
    public function inserirLivro($titulo, $autor, $editora, $qtdEstoque ){

        $livro = new Livro();
        $livro->setTitulo($titulo);
        $livro->setAutor($autor);
        $livro->setEditora($editora);
        $livro->setQtdEstoque($qtdEstoque);

        $daoLivro = new DaoLivro();
        return $daoLivro->inserir($livro);
    }
    public function listarLivros(){
        $daoLivro = new DaoLivro();
        return $daoLivro ->listarLivroDAO();
    }
    public function excluirLivro($id){
        $daoLivro = new DaoLivro();
        $daoLivro->excluirLivroDAO($id);
    }
    public function pesquisarLivroid($id){
        $daoLivro = new DaoLivro();
        return $daoLivro->pesquisarLivroidDAO($id);
    }
    public function editarLivro($id){
    $daoLivro = new DaoLivro();
    return $daoLivro->editarLivroDAO($id);
    }
    public function limpar(){
        return $li = new Livro();
    }
}