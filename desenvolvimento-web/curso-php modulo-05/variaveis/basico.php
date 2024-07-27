<div class="titulo">Variaveis</div>

<?php
$numeroA = 12;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$somaDosNumeros = $a + $b;
echo $somaDosNumeros;

echo '<br>';
echo isset($somaDosNumeros);

unset($somaDosNumeros);
var_dump($somaDosNumeros);

$variavel = 'Agora sou uma string!';
echo '<br>' . $variavel;

// Nomes de variavel

$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida'; 
$_var_4 = 'valida';
$vár5 = 'valida'; #nao recomendada
// $6var = 'invalida';
// $%var7 = 'invalida';
// $var8% = 'invalida'; 

echo '<br>';