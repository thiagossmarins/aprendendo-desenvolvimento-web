<div class="titulo">Arrays constantes</div>

<?php
const frutas = array('Laranja', 'Abacaxi');
// frutas[0] = 'Banana';
// frutas[] = 'Banana';
echo frutas[0];

const carros = ["Fiat" => "Uno", "Ford" => "fiesta"];
// carros["Honda" => "civic"];
echo "<br>" .  carros["Fiat"];

define("Cidades", array('Belo Horizonte, "Recife'));
// Cidades[1] = "Rio de Janeiro";
echo '<br>' . Cidades[1];