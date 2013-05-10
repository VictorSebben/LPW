<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Enquete - Vírus no computador</h1>
        <h2>Seu computador já foi infectado por vírus?</h2>

        <form action="grava_voto.php" method="post">

        <?php
        $contador = -1;
        $pta = fopen("enquete.txt", "r");

        while($linha = fgets($pta)){
            $contador++;
        ?>
            <input id="<?php echo $contador; ?>" type="radio" name="enquete"
                   value="<?php echo $contador; ?>" />
            <label for="<?php echo $contador; ?>">
            <?php
            $dados = explode(";", $linha);
            echo $dados[0];
            ?>
            </label>
            <br>

        <?php
        }
        ?>

            <p><input type="submit" value="Emitir minha opinião" name="enviar"/></p>
        </form>


    </body>
</html>
