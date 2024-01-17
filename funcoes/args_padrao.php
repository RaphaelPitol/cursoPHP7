<div class="titulo">Argumentos Padrão</div>
<?php
/** desta forma podemos ou não declarar os argumentos da variavel
 * sendo que se não declarar a função usara os argumentos padrão
 * ja setados dentro da função.
 */
function saudacao($nome = 'Senhor(a)' , $sobrenome='Cliente'){
    return "Bem vindo $nome $sobrenome!<br>";
}
echo saudacao();
echo saudacao(null, "Pitol");
echo saudacao("Raphael", null);
echo saudacao(null, null);
/**desta forma devemos declarar o argumento da primeira
 * variavel e podemos declarar como null a agua
 */
function pedido($comida, $bebida = 'agua'){
    echo "Para comer = $comida<br>";
    echo "Para beber = $bebida<br>";
}
pedido("Carne");
pedido("Hamburguer", "coca");
pedido("Hamburguer", null);
/** nesta função quando o argumento ja for definido
 * como no caso a agua sempre sera necessario
 * declarar novamente
 */
function pedido2($bebida = 'agua', $comida){
    echo "Para beber= $bebida<br>";
    echo "Para comer= $comida<br>";
}

pedido2("Agua2", "Hamburguer2");