<div class="titulo">Data #02</div>

<?php
//conhecendo tipos e formatos de datas
$formatoData1 = 'D, d \d\e M \d\e Y';
$formatoData2 = '%A, %d de %B de %Y';
$formatoDataHora = '%A, %d de %b de %Y - %H:%M:%S';

$agora = new DateTime();

// print_r($agora);

echo $agora->format($formatoData1).'<br>';

setlocale(LC_TIME, 'pt_br');
echo strftime($formatoData2, $agora->getTimestamp()).'<br>';

$dataFixa = new DateTime('1975-01-26 15:30:50');
echo strftime($formatoDataHora, $dataFixa->getTimestamp()).'<br>';

$amanha = new DateTime('+2 week');
echo strftime($formatoData2, $amanha->getTimestamp()).'<br>';

$amanha->modify('+1 day');
echo strftime($formatoDataHora, $amanha->getTimestamp()).'<br>';

$amanha->setDate(2000, 5, 25);
echo strftime($formatoDataHora, $amanha->getTimestamp()).'<br>';

$dataPassada = new DateTime('2000-05-17');
$dataFutura = new DateTime('2030-11-26');
$outraData = new DateTime('2030-11-26');

echo '<br>';
echo ($amanha > $dataPassada ? 'Maior' : 'Menor').'<br>';
echo ($amanha > $dataFutura ? 'Maior' : 'Menor').'<br>';
echo $outraData == $dataFutura ? 'Igual' : 'Diferente';

echo '<br>';
$tz = new DateTimeZone('America/Sao_Paulo');
$d = new DateTime('', $tz);
$agora = new DateTime( '', $tz);
echo $agora->format('d/M/y H:i:s');

