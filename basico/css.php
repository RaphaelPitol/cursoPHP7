<div class="titulo">Integração CSS</div>

<h1 azul>
    <?php
    echo 'Ola ';
    echo '<small>';
    echo 'Mundo!';
    echo '</small>';
    ?>
</h1>
<div vermelho center><?= 'Outra forma de me "Expressar!"'?></div>
<br>
<?= "<div> Aqui tambem é uma forma de integração! </div>" ?>
<br>
<div center><button dobro><?="Ola PhP"?></button></div>

<style>
    button{
        padding: 5px 20px;
        background-color: #4286f4;
        color: #eee;
        font-weight: bold;
        border-radius: 10px;
    }
    [center]{
        display: flex;
        justify-content: center;
    }
    [azul]{
        color: #4286f4;
    }
    [vermelho]{
        color: crimson;
    }
    [dobro]{
        font-size: 2rem;
    }
</style>
