<?php

if(isset($_POST['enviar'])){
    $pta = fopen("senhas.txt", "a");

    $string = $_POST['id'] . ':' . $_POST['nome'] . ':' .
            $_POST['usuario'] . ':' . md5($_POST['senha']) . "\n";

    fwrite($pta, $string);
    fclose($pta);

    echo '<p>Gravando dados do usuário</p>';
}

?>

<a href=".">Voltar ao início</a>
