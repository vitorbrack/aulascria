<?php

require_once 'C:/xampp/htdocs/academia/db/Conecta.php';
require_once 'C:/xampp/htdocs/academia/model/Pessoa.php';

class daoPessoa{

    public $conn;
    
    function inserir(Pessoa $p) {
        $conn = new Conecta();
        $msg = "Dados cadastrados com sucesso!";
        if ($conn->conectadb()){
        $sql = "insert into pessoa values (null, '" . $p->getNome() .
                "','" . $p->getDtNasc() . "','" . $p->getLogin() . "','" .
                $p->getSenha() . "','" . $p->getPerfil() . "','" .
                $p->getEmail() . "','" . $p->getCpf() . "')";
        if (mysqli_query($conn->conectadb(), $sql) !=1){
            $msg = "Dados cadastrados com sucesso!";
        }
        } else
            $msg = "Erro no cadastramento!";
        mysqli_close($conn->conectadb());
        return $msg;

    }

}

?>