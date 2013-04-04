<?php
/*
 * setlocale -> setar configurações língua/região
 * strftime -> formata data/hora de acordo com as configurações do locale
 */

//O LC_TIME indica que estamos setando configurações para data e hora.
//Passamos dois parâmetros, ptb e pt_BR, para que seja entendido por Linux e Windows.
setlocale(LC_TIME, "ptb", "pt_BR.UTF-8");
$data = time();
echo ucfirst(strftime("%A, %d de %B de %G - %H:%M:%S"));
?>
