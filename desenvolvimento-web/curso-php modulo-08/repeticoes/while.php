<div class="titulo">While/Do While</div>

<?php
const valor_limite = 5;
$contador = 0;

while ($contador < valor_limite) {
  echo "while $contador <br>";
  $contador++;
}

$contador = 100;
do {
  echo "do-while $contador <br>";
  $contador++;
} while($contador < valor_limite);

$contador = 0;
while(true) {
  echo "while(true) $contador <br>";
  $contador++;
  if($contador >= valor_limite) break;
}