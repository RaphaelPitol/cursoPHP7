<div class="titulo">Try-Catch</div>

<?php

try{
     echo 7 / 0,001;
}catch(Error $e){
     echo 'Teve um erro <br>';
}

try{
     throw new Exception('Um erro muito estranho!');
     echo intdiv(7 / 0);
}catch(DivisionByZeroError $e){
     echo 'Divisão por zero <br>';
}catch(Throwable $e){
     echo 'Erro encontrado: '. $e->getMessage(). '<br>';
}finally{
     echo 'Sempre executado!';
}
