<?php

$idade = 25;
$nome = "chablaun";
$altura = 1.77;
$peso = 87;
$ativado = true;

echo "<h1 style = 'color: blue'>Calculo do IMC</h1>";

if ($ativado = true) {
    $imc = ($peso / ($altura * $altura));
    echo number_format ($imc,1);
} else {
    echo ("faça dnv");
}

?>