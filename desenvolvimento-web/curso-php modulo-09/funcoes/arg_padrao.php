<div class="titulo">Argumento Padrão</div>

<?php
function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente'){
  return "Bem vindo, $nome $sobrenome!<br>";
}

echo saudacao();
echo saudacao(NULL);
echo saudacao(NULL, NULL);
echo saudacao('Thiago', 'Marins');

echo '<hr>';

function anotarPedido($comida, $bebida = 'Agua') {
  echo "Para comer:  $comida <br>";
  echo "Para beber: $bebida <br>";
}

anotarPedido('Brigadeiro');
echo '<hr>';
anotarPedido('Espetinho de porco', 'Guaraná antartica');

echo '<hr>';

function anotarPedido2($bebida = 'Agua', $comida) {
  echo "Para comer:  $comida <br>";
  echo "Para beber: $bebida <br>";
}

anotarPedido2('Coxinha', 'Coca');