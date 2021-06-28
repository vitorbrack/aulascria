<?php

require_once "model/produto.php";

$p = new Produto();

$p ->setId(12);
$p ->setnome("humano") ;
$p ->setvlrCompra("10 conto.") ;
$p ->setvlrVenda(1000) ;
$p ->setqtdEstoque("varios") ;

echo "Dados do produto:<br>";
echo "Código:" . $p->getId() . "<br>";
echo "Produto:" . $p -> getnome() . "<br>";
echo "Valor da compra:" . $p ->getvlrCompra(). "<br>";
echo "Valor de venda:" .number_format($p ->getvlrVenda(),2) . "<br>";
echo "Quantidade em estoque:" . $p ->getqtdEstoque() .  "<br>"  ;
echo "Caro mais barato!"

$db = mysqli_connect ("localhost:3306","root", "senac","academia");
$sql = "insert into produto values('$id','$nome','$vlrc','$vrlv','$qtd')";


?>