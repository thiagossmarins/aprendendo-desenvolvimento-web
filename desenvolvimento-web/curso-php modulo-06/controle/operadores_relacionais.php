<div class="titulo">Operadores relacionais</div>

<?php
var_dump(1 == 1); // true
var_dump(1 > 1); // false
var_dump(1 >= 1); //true
var_dump(4 < 23); //true
var_dump(1 <= 7); // true
var_dump(1 != 1); // false
var_dump(1 <> 1); //false

var_dump(1 == "1"); //true
var_dump(1 === "1"); //false
echo "<br>";
var_dump(1 != "1"); //false
var_dump(1 !== "1"); //true

echo "<p>Relacionais do if/else</p><br>";

$idade = 18;
if ($idade < 18) {
  echo "Menor de idade<br>";
} else if ($idade <= 65) {
  echo  "Adulto";
} else {
  echo "Terceira idade";
}

echo '<p>Spaceship</p><br>';
# se o valor da esquerda for maior do que da direita, ele vai me retornar 1
# se o valor for igual, ele vai me retornar zero
# se o valor da direita for maior do que da esquerda, ele vai me retonar -1
var_dump(5 <=> 3); 
var_dump(50<=> 50);
var_dump(5 <=> 50);

echo "<p> </p>";
echo 'Como saber se o numero é verdadeiro ou falso<br>';
echo "usando '!!'<br>";
var_dump(!!5);

?>

<style>
  p {
    margin-bottom: -10px;
  }

  hr {
    margin-bottom: 0px;
  }
</style>