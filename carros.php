<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if(isset($_POST['btnEnviar'])){
            $carros = $_POST['carros'];
            sort($carros);
            foreach($carros as $ind => $modelo){
                echo "<br> $ind: $modelo";
            }
        }
        ?>
    </body>
</html>
