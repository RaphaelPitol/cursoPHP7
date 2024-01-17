<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > km</option>
        <option value="metro-km">Metro > km</option>
        <option value="km-metro">Km . Metro</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form>* {
        font-size: 1.8rem;
    }
</style>

<?php
    switch ($_POST['conversao']) {
        case "km-milha":
            echo "km-milha " . $_POST['param'] / 1.609;
            break;
        case "milha-km":
            echo "milha-km " . $_POST['param'] * 1.609;
            break;
        case "metro-km":
            echo "metro-km " . $_POST['param'] / 1000;
            break;
        case "km-metro":
            echo "km-metro " . $_POST['param'] * 1000;
            break;
        default:
    }



