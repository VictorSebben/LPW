<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if($pta = fopen("../arqs/notas.txt", "r")){
            $sum = 0;
            $contador = 0;

            while(($linha = fgets($pta)) != FALSE){ //retorna false quando fgets não achar nada. Poderia ser while(!feof($pta)), ficando o fgets dentro do laço
                $dados = explode(';', $linha);

                $sum += (float) $dados[2];
                $contador++;
            }

            if($contador > 0){
                $media = $sum / $contador;
                echo '<h2>Média das notas: ' . round($media, 2) . '</h2>';
            }
            else
                echo 'Não encontrou dados no arquivo';

            fclose($pta);
        }
        ?>
    </body>
</html>
