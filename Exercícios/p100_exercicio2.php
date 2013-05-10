<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();

        if(isset($_SESSION["data"])){
        ?>

        <p>Data: <?php echo $_SESSION["data"]; ?></p>
        <p>Horário: <?php echo $_SESSION["hora"]; ?></p>
        <p>Dia: <?php echo $_SESSION["dia"]; ?></p>

        <?php
        }
        ?>
    </body>
</html>
