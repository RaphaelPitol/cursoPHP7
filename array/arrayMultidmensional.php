<div class="titulo">Array Multdimensional</div>
<?php
$dados = [
    [
        "nome" => "Raphael",
        "idade" => 35,
        "naturalidade" => "N.o"
    ],
    ["nome"=> "Heloisa",
    "idade" => "13",
    "naturalidade" => "N.o"
],
[
    "nome"=> "Leonardo",
    "idade"=> "10",
    "naturalidade"=> "N.O"
]

];

print_r($dados);

echo '<br>'.$dados[0]['idade'];
echo '<br>'.$dados[1]['idade'];

$dados[]=[
    "nome"=> "Cilene",
    "idade"=> 40,
    "naturalidade"=> "Cruzeiro"    
];
echo '<br>';
print_r($dados);

echo '<br>'.$dados[0]['idade'];
echo '<br>'.$dados[1]['idade'];
echo '<br>'.$dados[2]['idade'];

$dados[2]["profissao"] = "Enfermagem";

echo '<br>';
print_r($dados[2]);
echo "<br>";
unset($dados[1]);
echo '<br>';
print_r($dados);