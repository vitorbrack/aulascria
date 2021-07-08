<?php
include_once 'livroController.php';

$id = $_REQUEST['id'];
$pc = new ProdutoController();
$pc->pesquisarProdutoId($id);
header("Location: ../cadastroLivro.php");
exit;