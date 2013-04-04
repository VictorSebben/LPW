<?php

if(isset($_POST['enviar'])){
    $nome = $_POST['nome'];
    $ano_nascimento = $_POST['nascimento'];

    $ano_atual = (int) date('Y');

    $idade = $ano_atual - $ano_nascimento;

    echo 'Olá, ', $nome;
    echo '<br>Sua idade é ', $idade;
}

?>
