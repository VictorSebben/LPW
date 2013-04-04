<?php

/*
 * O require, se não encontrar o arquivo, gera um erro e para a execução.
 * Já o include continua a execução, apenas gerando um warning.
 */

include_once 'funcoes.php';

$num = array(3, 5, 6, 7, 2, 3);

echo 'Soma dos valores: ', soma_vetor($num);

?>
