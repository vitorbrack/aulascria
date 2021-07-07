<?php
include_once 'C:/xampp/htdocs/academia/PHP/db/conecta3.php';
include_once 'C:/xampp/htdocs/academia/PHP/model/livro.php';

class daoLivro
{
    public function inserir(Livro $l)
    {
        $conn = new Conecta3();
        if ($conn->conectadb()) {
            $sql = "insert into livro value (null, '" .
                $l->getTitulo() . "','" .
                $l->getAutor() . "','" .
                $l->getEditora() . "','" .
                $l->getQtdEstoque() . "')";
            if (mysqli_query($conn->conectadb(), $sql)) {
                $msg = "<p style='color:green'>  Dados cadastrados com sucesso </p>";
            } else {
                $msg = "<p> failed </p>";
            }
        } else {
            $msg = "<p> Erro na conexão </p>";
        }
        mysqli_close($conn->conectadb());
        return $msg;
    }
    public function listarLivroDAO(){
        $conn = new Conecta3();
        if ($conn->conectadb()) {
            $sql = "select * from livro";
            $query = mysqli_query($conn->conectadb(), $sql);
            $result = mysqli_fetch_array($query);
            $lista = array();
            $a = 0;
            if ($result){}
            do{
                $produto = new Livro();
                $produto->setIdLivro($result['idLivro']);
                $produto->setTitulo($result['titulo']);
                $produto->setAutor($result['autor']);
                $produto->setEditora($result['editora']);
                $produto->setQtdEstoque($result['qtdEstoque']);
                $lista[$a] = $produto;
                $a++;
            }while($result = mysqli_fetch_array($query));
            mysqli_close($conn->conectadb());
            return $lista;
         }
     }
}