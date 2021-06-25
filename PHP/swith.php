<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swith em PHP</title>
</head>
<body>

<h2> Eleições para sindico</h2>
<label>Selecione o seu candidato</label>
<form method="post" action="">
<label>Candidato: </label>
<select name = "candidato">
<option value="x">[-----SELECIONE-----]</option>
<option value="1">[-----YODA-----]</option>
<option value="2">[-----NIVY-----]</option>
<option value="3">[-----JUKES-----]</option>
</select>
<input type="submit" value="Votar" name="voto">
</form>
<?php
if($_POST['voto']){

    $candidato = $_POST['canditado'];

    switch($candidato){

        case(1): echo" Yoda foi votado"; break;
        case(2): echo" Nivy foi votado"; break;
        case(3): echo" Jukes foi votado"; break;
        default: echo"NA voto";
  
    }
    
}


?>
    
</body>
</html>


$idade = 25;

switch($idade){
    case($idade < 18): echo "Novão"; break;
    case($idade > 18): echo "Da pra dale"; break;
    default: echo"Ta velho pra krl";
}