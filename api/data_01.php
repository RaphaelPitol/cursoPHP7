<div class="titulo">Datas #01</div>

<?php
//retorna quantidade de segundos do marco 0.
echo time().'<br>';

// o D maiusculo representa dia da semna
// o d minisculo representa o dia do mes

//para escrever um texto \d\e
echo date('D, d \d\e M \d\e Y H:i A').'<br>';

echo strftime('%A, %d de %B de %Y', time()).'<br>';

//setlocale para formatar a data traduzida em portugues
setlocale(LC_TIME, 'pt_br', 'pt_BR.utf-8');
echo strftime('%A, %d de %B de %Y', time()).'<br>';

//formula pra acrescentar um dia
$amanha = time() + (24 * 60 * 60);
echo strftime('%A, %d de %B de %Y', $amanha).'<br>';

//função para acrecentar uma semana, um ano ou um dia
$proximasemana = strtotime('+1 week');
echo strftime('%A, %d de %B de %Y', $proximasemana).'<br>';

//para definir uma data fixa
$datafixa = mktime(15, 30, 30, 12, 1, 2025);

echo strftime('%A, %d de %B de %Y - %H:%M:%S', $datafixa);



