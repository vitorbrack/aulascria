<?php
include_once  'produtoController';

$id = $_REQUEST['id'];
$pc = new ProdutoController();

$pc->editarProduto($id);

?>