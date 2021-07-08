<?php
include_once 'livroController.php';
$id = $_REQUEST['ide'];
$pc = new LivroController();
$pc->excluirLivro($id);