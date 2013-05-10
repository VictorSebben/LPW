<?php

if(isset($_COOKIE['nova_cookie'])){
    $data_criacao = $_COOKIE['nova_cookie'];
    $data_atual = time();
    $diferenca = $data_atual - $data_criacao;

    if($diferenca < 3600)
        echo 'Cookie criada há ' . round($diferenca / 60) . " minutos.";

    else if($diferenca < 86400)
        echo 'Cookie criada há ' . round($diferenca / 3600) . " horas.";

    else
        echo 'Cookie criada há ' . round($diferenca / (3600 * 24)) . " dias";
}
else
    echo 'Cookie not set.';

?>
