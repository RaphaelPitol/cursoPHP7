<?php
session_start();
session_destroy();
//limpando o cookie
unset($_COOKIE['usuario']);
setcookie('usuario', '');
header('Location: login.php');