<div class="titulo">Desafio Sorteio</div>

<?php

$personagens = ["Elza", "Rapunzel", "Branca de Neve", "Cinderela"];

$sorteio = array_rand($personagens);

echo "<h1>$personagens[$sorteio]</h1>";