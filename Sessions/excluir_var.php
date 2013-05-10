<?php

session_start();

//vamos excluir a variável hora da sessão
if(isset($_SESSION['hora']))
    unset($_SESSION['hora']);

print_r($_SESSION);

?>
<p>Excluindo variável da sessão.</p>
<p><a href="destruir_sessao.php">Destruir sessão</a></p>
