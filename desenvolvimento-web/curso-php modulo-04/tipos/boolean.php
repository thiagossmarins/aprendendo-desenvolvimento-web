<div class="titulo">Tipo Boolean</div>

<?php
echo true;
echo '<br>';
echo false;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>', var_dump('false');
echo '<br>' . is_bool(false);
echo '<br>' . is_bool('true');

//  fazer as regras de conversões;
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); # apenas zero é false
echo '<br>' . var_dump((bool) 1); 
echo '<br>' . var_dump((bool)  ""); 
echo '<br>' . var_dump((bool)  " "); 

echo '<br>' . var_dump(!!"false");