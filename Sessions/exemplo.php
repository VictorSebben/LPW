<?php

session_start();

$_SESSION["login"] = "maria";
$_SESSION["data"] = "02/11/2011";
$_SESSION["hora"] = "22:20";

$id_sessao = session_id(); //identificador da sessão

echo "Criando variável na sessão $id_sessao";

?>

<a href="pelota.php">Site pelota</a>