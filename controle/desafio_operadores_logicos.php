<div class="titulo">Desafio Operadores Logicos</div>

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1-(Terça)</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2-(quinta)</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select{
        font-size: 1.5rem;
    }
</style>

<?php

$trabalho1= (!!$_POST['t1']);
$trabalho2= (!!$_POST['t2']);

if($trabalho1 && $trabalho2 ){
    echo '<br>Vamos tomar Sorvete e comprar a Tv de 52';
}elseif($trabalho1 or $trabalho2 ){
    echo '<br>Vamos somente compra a tv de 32';
}else{
    echo '<br>Melo o role nenhum dos dois';
}