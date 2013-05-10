<?php

setcookie("cookie_lpw", time(), time() + (2 * 60 * 60)); //um cookie com validade de duas horas
setcookie("aluno", "Vichnology", time() + (60 * 60 * 24));

?>

<p>Teste de criação do cookie</p>
<a href="pag2.php">Ir para página 2</a>

<a href="excluir_cookie.php">Remover cookie_lpw</a>
