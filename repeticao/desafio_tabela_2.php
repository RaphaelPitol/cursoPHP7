<div class="titulo">Desafio Tabela #2</div>

<form action="" method="post">
    <div>
        <label for="number" class="coluna">Numero de Linha:</label>
        <input name="linha" type="number" value=<?= $_POST['linha'] ?? 10 ?>>
    </div>
    <div>
        <label for="number" class="linha">Numero de colunas:</label>
        <input name="coluna" type="number" value=<?= $_POST['coluna'] ?? 10 ?>>
    </div>
    <button type="submit">Fazer Tabela</button>
</form>

<table>
    <?php
    /* intval torna os valores pegos pelo post(string) em int */
    $linha = intval($_POST["linha"]);
    $coluna = intval($_POST["coluna"]);
    var_dump($linha);
    var_dump($coluna);

    $num = 1;
    for ($i = 1; $i <= $linha; $i++) {
        $style = ($i % 2 === 0 ? 'background-color: lightblue' : '');
        echo "<tr style = '{$style}'>";
        for ($j = 1; $j <= $coluna; $j++) {
            echo "<td>$num</td>";
            $num++;
        }

        echo '</tr>';
    }

    ?>
</table>
<style>
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        border: 1px solid #444;
        padding: 10px 20px;


    }
</style>