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
     public function listarProdutoDAO(){
        $conn = new Conecta2();
        if ($conn->conectadb()) {
            $sql = "select * from produto";
            $query = mysqli_query($conn->conectadb(), $sql);
            $result = mysqli_fetch_array($query);
            $lista = array();
            $a = 0;
            if ($result){}
            do{
                $produto = new Produto();
                $produto->setIdProduto($result['idproduto']);
                $produto->setNomeProduto($result['nomeProduto']);
                $produto->setVlrCompra($result['valorCompra']);
                $produto->setVlrVenda($result['valorVenda']);
                $produto->setQtdEstoque($result['qtdEstoque']);
                $lista[$a] = $produto;
                $a++;
            }while($result = mysqli_fetch_array($query));
            mysqli_close($conn->conectadb());
            return $lista;
         }
     }
}


?>
