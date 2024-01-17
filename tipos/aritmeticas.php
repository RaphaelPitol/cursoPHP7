<div class="titulo">Operações Aritméticas</div>
<?php 
echo 10- 2, '<br>';
echo 2 * 5, '<br>';
echo 7/4, '<br>';
echo intdiv(7, 4), '<br>';
echo round(7/4), '<br>';
echo 7 % 4, '<br>';

//precedencias de operadores

echo '<p>Precedencia de Operadores</p>';
echo 2 + 3 * 4, '<br>';
echo (2+4) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3)* 4) ** 2;