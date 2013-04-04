<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Reprovados</title>
    </head>
    <body>
        <?php

        $notas = array("Pafuncio" => 10, "Ostrobaldo" => 9.5, "Marcobaldo" => 5,
            "Otokleidson" => 4.3, "Fitokleidson" => 8, "Trufoncio" => 1);

        function reprovados(array $n){
            foreach($n as $aluno => $nota){
                if($nota < 6){
                    $notas_reprovados["$aluno"] = $nota;
                }
            }

            ksort($notas_reprovados);
            return $notas_reprovados;
        }

        $reprovados = reprovados($notas);
        echo "Os alunos reprovados foram: <br>";
        foreach($reprovados as $aluno => $nota){
            echo "$aluno: $nota<br>";
        }

        ?>
    </body>
</html>
