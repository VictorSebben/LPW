<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php if(isset($_POST['enviar'])){ ?>
        
        <p>A mensagem de <?php echo $_POST['nome'] ?> é:<br><?php echo $_POST['mensagem'] ?> </p>
        <p>Sua categoria favorta é <?php echo $_POST['destino'] ?></p>
        
        <?php } ?>
    </body>
</html>
