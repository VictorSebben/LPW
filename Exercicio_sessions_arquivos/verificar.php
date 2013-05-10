<?php

if(isset($_POST['login'])){

    $senha = md5($_POST['senha']);
    $usuario = $_POST['usuario'];

    if($pta = fopen("senhas.txt", "r")){

        while($linha = trim(fgets($pta))){

            $dados_arquivo = explode(":", $linha);

            if(($usuario == $dados_arquivo[2]) && ($senha == $dados_arquivo[3])){
                session_start();
                $_SESSION['nome'] = $dados_arquivo[1];
                $_SESSION['usuario'] = $dados_arquivo[2];
                header("Location: arquivo1.php");
            }
            else
                echo "Nome do usuário e/ou senha inválido(s)!";
        }

        fclose($pta);
    }
}

?>
