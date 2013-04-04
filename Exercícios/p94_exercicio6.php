<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Detector de Feriados</title>
    </head>
    <body>
        <?php
        $feriados = array('07/09/2013', '20/09/2013', '12/10/2013', '02/11/2013',
            '15/11/2013', '08/12/2013');
        ?>

        <h1>Bem-vindo ao detector de feriados</h1>
        <p>Hoje é dia <?php echo date('d/m/Y'); ?></p>
        <p>É feriado? <b> <?php echo verificaFeriado($feriados); ?> </b></p>

        <?php

        function verificaFeriado($f){
            $resposta = "Não";
            $hoje = date("d/m/Y");

            foreach($f as $feriado){
                if(strcmp($hoje, $feriado) == 0){
                    $resposta = "Sim";
                }

            }

            return $resposta;
        }

        ?>
    </body>
</html>
