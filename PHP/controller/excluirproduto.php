<?php
include_once 'C:/xampp/htdocs/academia/PHP/produtoController.php';

$id = $_REQUEST['ide'];
$pc = new ProdutoController();

$pc->excluirProduto($id);

?>