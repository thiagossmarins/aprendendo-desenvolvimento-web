<div class="titulo">Operacoes</div>

<?php
$dados1 = [
  "nome" => "Jose",
  "idade" => 28
];

$dados2 = [
  "naturalidade" => "Fortaleza"
];

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos); 
echo '<br>' . count($dadosCompletos); 

echo '<br>';
$indice = array_rand($dadosCompletos);
echo "$indice = $dadosComletos[$indice]";
echo '<br>';
// echo "${dadosCompletos['idade']}";

unset($dadosComletos["nome"]);
echo '<br>';
var_dump($dadosComletos);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = array_merge($pares, $impares);
echo '<br>';
print_r($decimais);

sort($decimais);
echo '<br>';
print_r($decimais);