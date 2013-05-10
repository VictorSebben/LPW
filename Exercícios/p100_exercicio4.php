<?php

if(isset($_COOKIE['login']) && isset($_COOKIE['senha']))
    echo 'Bem vindo ', $_COOKIE['login'];

else if(isset($_POST['enviar']))
{
    setcookie('login', $_POST['login'], time() + (0.5 * 3600));
    setcookie('senha', $_POST['senha'], time() + (0.5 * 3600));

    echo 'Bem vindo ', $_POST['login'];
}

else
    echo 'Erro. Usuário não existente.';

?>

<a href="p100_exercicio4_form.html">Voltar</a><br>
<a href="destruir_cookie.php">Sair</a>;
