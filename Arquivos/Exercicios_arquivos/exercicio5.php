<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Notas</title>
    </head>
    <body>
        <?php
        if($pta = fopen("../arqs/notas.txt", "r")){
            $notas = explode(';', fread($pta, filesize("../arqs/notas.txt")));
            $contador = 0;
            $sum = 0;
            $flag = -1;
            foreach($notas as $nota){
                $flag++;
                if($flag == 2){
                    $sum += $nota;
                    $contador++;
                }

                if($flag == 3)
                    $flag = 0;
            }

            $media = $sum / $contador;

            echo '<h2>Média das notas: ' . round($media, 2) . '</h2>';
            fclose($pta);
        }
        ?>
    </body>
</html>
