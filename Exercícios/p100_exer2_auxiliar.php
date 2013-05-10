<?php

session_start();

$_SESSION["data"] = date("d/m/Y");
$_SESSION["hora"] = date("H:i:s");
$_SESSION["dia"] = date("w");

$id_sessao = session_id();

echo "Criando variáveis na sessão $id_sessao";

?>

<p><a href="p100_exercicio2.php">Ver dados da sessão</a></p>

