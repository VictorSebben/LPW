<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Exercício 4 - Datas de Novembro</title>
    </head>
    <body>
        <?php
        $feriados = array("07/09/2010", "20/09/2010", "12/10/2010", "02/11/2010",
            "15/11/2010", "08/12/2010");

        $contador = 0;

        foreach($feriados as $feriado){
            $data = explode("/", $feriado);

            if($data[1] == 11){
                $contador++;
                echo "$data[0]/$data[1]/$data[2]<br>";
            }
        };

        echo "<h2>Temos, aqui, $contador datas do mês de novembro.";
        ?>
    </body>
</html>
