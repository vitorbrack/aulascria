<?php

include_once('../db/conecta.php');
include_once('../model/pessoa.php');

class daogGenerico{

public $conn;

function inserir(pessoa $p){
$conn = new Conecta();
if($conn == true){
    $sql ="insert into pessoa values (null,'".$p->getNome() 
}
}

}

?>