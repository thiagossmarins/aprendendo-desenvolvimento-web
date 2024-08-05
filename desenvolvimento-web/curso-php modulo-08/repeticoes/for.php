<div class="titulo">Laço for</div>

<?php
for ($cont = 1; $cont <= 5; $cont++) {
  echo "$cont <br>";
}

echo "<hr>";

for (; $cont <= 10; $cont++) {
  echo "$cont <br>";
}

echo "<br>";

for (; $cont <= 15;) {
  echo "$cont <br>";
  $cont++;
}

$array = ['segunda', 'terça', 'quarta', 'quinta', 'sexta', 'sabado', 'domingo'];

echo "<hr>";

print_r($array);
echo '<br>';
for ($i = 0; $i <= count($array); $i++) {
  echo "{$array[$i]} <br>";
}

$matrix = [
  ['a', 'e', 'i', 'o', 'u'],
  ['b', 'c', 'd']
];

echo "<hr>";

for ($i = 0.; $i < count($matrix); $i++) {
  for ($j = 0; $j  < count($matrix[$i]); $j++) {
    echo "{$matrix[$i][$j]}";
  }
  "<br>";
}
