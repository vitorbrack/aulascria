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
<?php 
?>
<form method="post" action="">
<label>Candidato: </label>
<select name = "candidato">
<option value="x">[-----SELECIONE-----]</option>
<option value="1">YODA</option>
<option value="2">NIVY</option>
<option value="3">JUKES</option>
</select>
<input type="submit" value="Votar" name="voto">
</form>
<?php
$repete=1;
$cand1 = 0; $cand2 = 0; $cand3 = 0; $nulo = 0;
$vencedor = 0;
$nomeVencedor;

if(isset($_POST['voto'])){
    setcookie($cookie_c1,"0");
    setcookie($cookie_c2,"0");
    setcookie($cookie_c3,"0");
    setcookie($cookie_n,"0");
    setcookie($cookie_cotador,"1");
    setcookie($cookie_vencedor,"0");

    $candidato = $_POST['canditado'];
 do{
    switch($candidato){

        case(1): echo" Yoda foi votado"; $cand1++; break;
        case(2): echo" Nivy foi votado"; $cand2++; break;
        case(3): echo" Jukes foi votado"; $cand3; break;
        default: echo"NA voto";
  
    }
    
} while($repete >5);
for ($x = 0;$x<3;$x++){
    if($vencedor < $cand1){
        $vencedor = $cand1;
        $nomeVencedor = "YODA";
    }
    if($vencedor < $cand2){
        $vencedor = $cand2;
        $nomeVencedor = "NIVY";
    }
    if($vencedor < $cand3){
        $vencedor = $cand3;
        $nomeVencedor = "JUKES";
    }
    
}

}
echo "<br> O sindico eleito: $nomeVencedor, com $vencedor votos";
echo "<br> Votos nulos: $nulo";

?>
    
</body>
</html>