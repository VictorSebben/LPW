<?php

$arquivo = "arqs/notas.txt";
$pta = fopen($arquivo, "r");
$tamanho = filesize($arquivo);
$conteudo = fread($pta, $tamanho);

echo nl2br($conteudo);

?>
