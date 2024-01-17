<?php namespace App; ?>

<div class="titulo">Sub-NameSpace</div>

<?php
echo __NAMESPACE__.'<br>';
const constante = 123;

namespace App\Principal;
const constante = 456;

namespace App\Principal\Especifico;
const constante = 789;

?>
<p><? echo \App\constante?></p>
<p><? echo \App\Principal\constante?></p>
<p><? echo \App\Principal\Especifico\constante?></p>