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
var_dump(1 != "1");//false
var_dump(1 !== "1"); //true

echo "<p>Relacionais do if/else</p><br>";

$idade = 18;
if($idade < 18) {
  echo "Menor de idade<br>";
} else if($idade <=65) {
  echo  "Adulto";
} else {
  echo "Terceira idade";
}