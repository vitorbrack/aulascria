<?php
include_once  'C:/xampp/htdocs/academia/PHP/db/conecta2.php';
include_once 'C:/xampp/htdocs/academia/PHP/model/produto.php';

class daoProduto{
    
    public function inserir(Produto $p) {
        $conn = new Conecta2();
        $msg = "Dados cadastrados com sucesso!";
        if ($conn->conectadb()){
        $sql = "insert into produto values (null, '" . $p->getnomeProduto() .
                "','" . $p->getvlrCompra() . "','" . $p->getvlrVenda() . "','" .
                $p->getqtdEstoque() . "')";
        if (mysqli_query($conn->conectadb(), $sql)){
            $msg = "<p style ='color:green;'>"
            ."Dados cadastrados com sucesso</p>";
        } else{
            $msg = "<p style='color:red'>" ."Erro na inserção de dados</p>";
        }
        }else
            $msg = "Erro no cadastramento!";
        mysqli_close($conn->conectadb());
        return $msg;

    }

}


?>
