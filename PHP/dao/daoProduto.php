<?php
include_once  'C:/xampp/htdocs/academia/PHP/db/conecta2.php';
include_once 'C:/xampp/htdocs/academia/PHP/model/produto.php';

class daoProduto{
    
    public function inserir(Produto $p) {
        $conn = new Conecta2();
        $msg = "Dados cadastrados com sucesso!";
        if ($conn->conectadb()){
        $sql = "insert into produto values (null, '" . $p->getNomeProduto() .
                "','" . $p->getVlrCompra() . "','" . $p->getVlrVenda() . "','" .
                $p->getQtdEstoque() . "')";
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
                $produto->setIdproduto($result['idproduto']);
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

     public function excluirProdutoDAO($id){
         $conn = new Conecta2();
         $conecta = $conn->conectadb();
         if($conecta){
             $sql = "delete from produto where idproduto = '$id'";
             mysqli_query($conecta, $sql);
             header("Location:../cadastroProduto.php");
             mysqli_close($conecta);
             exit;
         }else{
             echo "<script>alert('Banco inponente!')</script>";
             echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"0;
            URL='http://localhost/academia/PHP/cadastroProduto.php>";
         }
     }

     public function pesquisarLivroDAO($id){
        $conn = new Conecta();
        $conecta = $conn->conectadb();
        $produto = new produto ();
        if($Conecta){
            $sql = "select* from produto where idproduto = '$id'";
            $result = mysqli_query($conecta, $sql);
            $linha = mysqli_fetch_assoc($result);
            if ($linha){
                do{
                    $produto->setIdproduto($linha['idproduto']);
                    $produto->setNomeProduto($linha['nomeProduto']);
                    $produto->setVlrCompra($linha['valorCompra']);
                    $produto->setVlrVenda($linha['valorVenda']);
                    $produto->setQtdEstoque($linha['qtdEstoque']);  
                }while($linha = mysqli_fetch_assoc($result));
        }
        mysqli_close($conecta);
     }else{
         echo "<script>alert('Banco inponente!')</script>";
         echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"0;
         URL='http://localhost/academia/PHP/cadastroProduto.php>";
     }
     return $produto;
}


?>
