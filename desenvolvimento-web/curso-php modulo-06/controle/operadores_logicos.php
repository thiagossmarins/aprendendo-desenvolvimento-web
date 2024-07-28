<div class="titulo">Operadores lógicos</div>

<?php
echo "<p class='divisao'>Negação Lógica</p>";
var_dump(true);
echo '<br>';
var_dump(!true); // not

echo "<p class='divisao'>Tabela Verdade 'AND' (E)</p>";
// as duas condições tem que ser verdadeiro pro resultado ser verdadeiro
var_dump(true && true);
var_dump(true && false);
var_dump(true && true);
var_dump(false && false);
echo "<br>";

echo "<p class='divisao'>Tabela Verdade 'OR' (OU)</p>";
// o resultado só é falso quando os dois valores são falsos
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);

echo "<p class='divisao'>Exemplo</p>";
$idade = 62;
$sexo = 'M';
echo "<br>";

if($idade >= 60 && $sexo === 'F') {
  echo "Pode se aposentar -> $sexo";
} else if ($idade >= 65 && $sexo === 'M') {
  echo "Pode se aposentar -> $sexo";
} else {
  echo 'Não pode se aposentar, tem que trabalhar mais...';
}

?>