<div class="titulo">$_POST</div>

<form action="#" method="post">
    <label for="texto">Nome
        <input type="text" name="nome">
    </label>
    <label for="texto">Sobrenome
        <input type="text" name="sobrenome" >
    </label>
    <select name="estado">
        <option value="Ac">Acre</option>
        <option value="PA">Pará</option>
        <option value="SP">São Paulo</option>
        <option value="RJ">Rio de Janeiro</option>
        <option value="MT">Mato Grosso</option>
    </select>
    <button>Enviar</button>
</form>

<style>
    form > *{
        font-size: 1.5rem;
    }
</style>

<?php

print_r($_POST);
echo '<br>';
print_r($_POST['estado']);
echo '<br>';
echo "{$_POST['nome']} Pitol {$_POST['sobrenome']}";

echo '<br>';
print_r($_POST['sobrenome']);