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
print_r($dadosComletos);