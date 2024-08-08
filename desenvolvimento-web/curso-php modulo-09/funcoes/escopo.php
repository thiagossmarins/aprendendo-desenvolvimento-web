<div class="titulo">Funções e Escopo</div>

<?php
function imprimirMensagens() {
  echo "Olá! ";
  echo "Até a próxima!<br>";
}

imprimirMensagens();

$variavel = 1;
function trocarValor() {
  $variavel = 2;
  echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocarValor();
echo "Depois: $variavel <br>";


function trocaValorDeVerdade(){
  global $variavel;
  $variavel = 3;
  echo "Durante: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValorDeVerdade();
echo "Depois: $variavel <br>";

echo '<hr>';

var_dump(trocaValorDeVerdade());