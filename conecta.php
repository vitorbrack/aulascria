<?php

$endereco = 'localhost';
$usuario = 'root';
$senha = 'senac';
$banco = 'academiaff';

$link = mysqli_connect($endereco,$usuario,$senha,$banco)
or die('Erro: '.mysqli_error($link));

$sql = "insert into cadastro";
$sql.="('',";
$sql.="'".$_POST['nome']."',";
$sql.="'".$_POST['sobrenome']."',";
$sql.="'".$_POST['nascimento']."',";
$sql.="'".$_POST['sexo']."',";
$sql.="'".$_POST['usuario']."',";
$sql.="'".$_POST['tel']."',";
$sql.="'".$_POST['email']."',";
$sql.="'".$_POST['senha']."',";
$sql.="'".$_POST['endereco']."',";
$sql.="'".$_POST['estado']."',";
$sql.="'".$_POST['cep']."');";

$consulta = mysqli_query($link,$sql);

if(!$consulta){
    
    die('Erro: '.mysqli_error($link));
}
else{
    echo 'Matrícula efetuada com sucesso';
}


echo $sql;

?>