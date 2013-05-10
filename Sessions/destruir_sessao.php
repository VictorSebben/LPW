<?php

session_start();
session_unset();
session_destroy();
header("Location: index.php");
//print_r($_SESSION);

?>

//Usamos o header para redirecionar para outra página, uma vez que as variáveis ainda
//ficam aí depois de destruir a sessão se não mudarmos de página. É comum
//redirecionar depois de destruir uma sessão.