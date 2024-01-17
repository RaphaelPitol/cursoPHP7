<div class="titulo">Desafio Tabela #1</div>

<?php
$matriz = [
    ['1', '2', '3', '4', '5'],
    ['6', '7', '8', '9', '10'],
    ['11', '12', '13', '14', '15'],
    ['16', '17', '18', '19', '20'],
    ['16', '17', '18', '19', '20'],
    ['16', '17', '18', '19', '20']
];
?>
<table>
    <?php
    foreach ($matriz as $key => $value) {
        /*Caso a chave for divisivel por 2 aplica o background, senão fica vazio o style*/
        $style = ($key % 2 === 0 ? 'background-color:lightblue;' : '');
        echo "<tr style ='{$style}'>";
        foreach ($value as $valor) {
            echo '<td>';
            echo $valor;
            echo '</td>';
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