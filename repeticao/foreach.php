<div class="titulo">ForEach</div>

<?php
$array = [
    1 => 'Domingo', 'Segunda', 'Terça',
    'Quarta', 'Quinta', 'Sexta', 'Sabado'
];

foreach($array as $dias){
    echo '<br>';
    echo $dias;
}
echo '<br>';

foreach($array as $dias =>$id){
    echo '<br>';
    echo $dias."º=".$id;
}

echo '<br>';
$matri =[
    ['a','b','c', 'd',],
    ['a','e','i','o','u'],
    ['1','2','3','4','5']
];

foreach($matri as $linha){
    foreach($linha as $l){
        echo $l;
    }
    echo '<br>';
}
















