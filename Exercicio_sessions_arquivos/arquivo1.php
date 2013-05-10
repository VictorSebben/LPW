<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();

        if(isset($_SESSION['usuario']) && isset($_SESSION['nome'])){
            echo '<h2>Nome: ', $_SESSION['nome'], '</h2>';
            echo '<h2>Usuário: ', $_SESSION['usuario'], '</h2>';

            echo '<a href="destruir.php">Sair</a>';
        }

        else
            echo 'Erro ao buscar dados na sessão!';
        ?>
    </body>
</html>
