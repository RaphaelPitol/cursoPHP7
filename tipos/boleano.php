<div class="titulo">Tipo Boleano</div>

<?php 

echo true;
echo "<br>";
echo false;

echo '<br>'. var_dump(true);
echo '<br>'. var_dump(false);
echo '<br>'. var_dump('false');
echo '<br>' . is_bool(false);
echo '<br>' . is_bool("false");

// fazer as regras de conversão
echo '<p>Regras:</>';

echo '<br>' . var_dump((bool) 0);//apnas zero é false
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) -1);
echo '<br>' . var_dump((bool) 0.0);
echo '<br>' . var_dump((bool) 0.0000000001);
echo '<br>' . var_dump((bool) '');//false
echo '<br>' . var_dump((bool) '0');// false
echo '<br>' . var_dump((bool) '00');// todos o resto é true
echo '<br>' . var_dump((bool) ' ');
echo '<br>' . var_dump((bool) 'false');

echo '<br>' . var_dump(!!'false');