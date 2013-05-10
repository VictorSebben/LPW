<?php
if(!isset($_COOKIE['contador']))
    setcookie('contador', 0, time() + (2 * 60 * 60));

$novo_valor = $_COOKIE['contador'];
$novo_valor++;

setcookie('contador', $novo_valor, time() + (2 * 60 * 60));
echo 'Você visitou essa página ' . $_COOKIE["contador"] . ' vezes.';

if($novo_valor > 100)
    echo "<br>Vá arrumar o que fazer!";
?>
