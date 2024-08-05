<div class="titulo">Comparação Arrays</div>

<?php
$arr1 = ['nome' => 'maria', "idade" => 20];
$arr2 = ['nome' => 'maria', "idade" => 20];
var_dump($arr1 == $arr2);
var_dump($arr1 == $arr2);

$arr3 = ['idade' => 20, 'nome' => 'maria'];
echo '<br>';
var_dump($arr1 == $arr3);
var_dump($arr1 === $arr3);
echo '<br>';
var_dump($arr1 != $arr3);
var_dump($arr1 !== $arr3);


echo '<br>';
$arr4 = ['idade' => '20', 'nome' => "maria"];
var_dump($arr1 == $arr4);
var_dump($arr1 === $arr4);