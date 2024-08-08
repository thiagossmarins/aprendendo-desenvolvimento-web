<div class="titulo">Argumentos e retorno</div>

<?php
function obterMensagem(){
  return "Seja bem-vindo(a)!";
}

echo obterMensagem();
$m = obterMensagem();
echo $m;
echo '<br>', obterMensagem();
echo '<br>';
var_dump(obterMensagem());

function  obterMensagemComNome($nome) {
  return "Seja bem-vindo {$nome}";
}

echo '<br>', obterMensagemComNome('Thiago');
echo '<br>', obterMensagemComNome('Thigas');

function soma($a, $b) {
  return $a + $b;
}

$x = 5;
$y = 5;
echo '<br>', soma(4, 2);
echo '<br>', soma($x, $y);

function trocarValor($a, $novoValor){
  $a = $novoValor;
}

$variavel = 1;
trocarValor($variavel, 3);
echo '<br>', $variavel;

function trocarValorDeVerdade(&$a, $novoValor) {
  $a = $novoValor;
}

trocarValorDeVerdade($variavel, 5);
echo '<br>', $variavel;