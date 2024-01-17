<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma String<br>';
echo'<br>';
echo 'soma 3 + 5 ='. 3+5;
echo'<br>';
$l= 'Eu Também';
var_dump($l);
echo'<br>';

//concatenação
echo "Nós Tambem". ' somos';
echo '<br>', "Tambem aceito", "virgula";

echo'<br>';
echo "'Teste' ". '" Teste" ' . '\'Teste\''. " \"Teste\" " . "\\";

//Algumas Funções

echo '<br>'. strtoupper('maximizado');
echo '<br>'. strtolower('MINIMIZADO');
echo '<br>'. ucfirst('só a primeira letra maiuscula');
echo '<br>'. ucwords('todas as inicias maiusculas');
echo '<br>'. strlen('Quantas letras');
echo '<br>'. mb_strlen("Eu também", "utf-8");
echo '<br>'. substr('Só uma parte mesmo', 7, 6); //parte, começa do indice 0 da string, seleciona apartir do setimo.
                                                    //se não colocar o segundo numero ele pega todas depois.
echo '<br>'. str_replace('isso', 'aquilo', 'Trocar isso isso');




