<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Resultado da Enquete</title>
    </head>
    <body>
        <h1>Resultado:</h1>
        <?php
        /*
         * Computar o voto recebido, salvar a nova informação no arquivo,
         * e mostrar os resultados na tela.
         * Ver se o arquivo já existe. Se não, inicializa os valores com zero (exceto pelo
         * voto já dado).
         */

        //Caminho para o arquivo e nome - constante
        define('ARQ', '../arqs/exer4.txt');

        if(isset($_POST['enviar'])){
            $voto = $_POST['enquete'];

            if(!file_exists(ARQ)){
                $pta = fopen(ARQ, 'w');
                fwrite($pta, '0;0;0;0');
                fclose($pta);
            }

            $pta = fopen(ARQ, 'r');
            $resultados = explode(";", fread($pta, filesize(ARQ)));
            fclose($pta);

            $resultados[$voto]++;

            $pta= fopen(ARQ, 'w');
            $resultado = implode(';', $resultados);
            fwrite($pta, $resultado);
            fclose($pta);

            $total = 0;
            //Calcular o total de votos para ver as percentagens depois:
            foreach($resultados as $r){
                $total = $total + $r;
            }
        }
        ?>

        <table border="1" cellpadding="1">
            <thead>
                <tr>
                    <th>Opção</th>
                    <th>Número de votos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sim, várias vezes</td>
                    <td><?php echo round($resultados[0] / $total * 100); ?>%</td>
                </tr>
                <tr>
                    <td>Sim, algumas vezes</td>
                    <td><?php echo round($resultados[1] / $total * 100); ?>%</td>
                </tr>
                <tr>
                    <td>Não</td>
                    <td><?php echo round($resultados[2] / $total * 100); ?>%</td>
                </tr>
                <tr>
                    <td>Não sei/Prefiro não opinar</td>
                    <td><?php echo round($resultados[3] / $total * 100); ?>%</td>
                </tr>
            </tbody>
        </table>

    </body>
</html>
