<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if(isset($_POST['btnEnviar'])){
            $mensagem = $_POST['mensagem'];
            $mensagem1 = strip_tags($mensagem);
            $mensagem1 = nl2br($mensagem1);
            echo "Mensagem: $mensagem1";
            
            $mensagem2 = htmlspecialchars($mensagem);
            $mensagem2 = nl2br($mensagem2);
            //o nl2br converte quebras de linha para <br>
            echo "<p>Mensagem: $mensagem2";
            //o htmlspecialchars converte somente os caracteres <, >, " e &
            
            //existe uma opção mais abrangente, que converte qualquer caractere
            //que tiver um equivalente em entidades html: htmlentities()
        }
        

        if(isset($_GET['par'])){
            echo $_GET['par'];
        }
        ?>
    </body>
</html>
