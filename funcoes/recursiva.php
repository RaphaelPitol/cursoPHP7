<div class="titulo">Recursiva</div>
<form method="post">
    <label for="text">Insira um Numero:
        <input type="number" name="numero">
    </label>
    <button type="submit">Salvar</button>
</form>
<?php
function recursiva($a){
    $y = 0;
    for(; $a >= 1; $a--){
    $y += $a;
      
    }
    return $y;
}

echo recursiva($_POST['numero']).'<br>';

function somaRecursiva($numero){
    if($numero === 1) return 1;
    return $numero + somaRecursiva($numero - 1);
}

echo somaRecursiva($_POST['numero']).'<br>';

function somaRecursivaTernaria($numero){
    return $numero === 1 ?  1: $numero + somaRecursivaTernaria($numero - 1);
}
echo somaRecursivaTernaria($_POST['numero']).'<br>';

?>
