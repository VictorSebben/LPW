<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Datas do mês</title>
    </head>
    <body>
        <?php

        setlocale(LC_TIME, "ptb", "pt_BR.UTF-8");

        $datas = array("10/04/2011", "14/04/2011", "21/04/2011", "01/05/2011",
            "07/09/2011", "20/09/2011", "09/05/2013", "12/05/2013");

        $mes = 5;

        function mostra_datas_do_mes($vet_datas, $num_mes){
            echo 'Datas do mês de: ' . strftime("%B", mktime(0, 0, 0, 5)) . '<br>';

            foreach($vet_datas as $data){
                $dat = explode("/", $data);

                if($num_mes == $dat[1]){
                    echo strftime("%d de %B - %A", mktime(0, 0, 0, $dat[1], $dat[0], $dat[2])) . '<br>';
                }
            }
        }

        mostra_datas_do_mes($datas, $mes);
        ?>
    </body>
</html>
