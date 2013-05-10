<?php

session_start();
$_SESSION['data'] = date("d/m/Y");
$_SESSION['hora'] = date("H:i:s");
$_SESSION['matricula'] = 3487;
echo "<p>Número da sessão: ", session_id(), "</p>";

?>
teste de sessão...
<p><a href="sessao2.php">Ir para o arquivo sessão 2</a></p>