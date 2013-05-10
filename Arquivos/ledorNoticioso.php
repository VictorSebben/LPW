<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if($pta = fopen("arqs/noticias.txt", "r")){
            while(!feof($pta)){
                $linhas[] = fgets($pta);
            }
        }?>

        <table border="1">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Horário</th>
                    <th>Manchete</th>
                </tr>
            </thead>
            <tbody>


        <?php
        foreach($linhas as $linha):
            $dados = explode("#", $linha);
            $dados_data = explode("/", $dados[0]);
            $data = mktime(0, 0, 0, $dados_data[1], $dados_data[0]);
        ?>
                <tr>
                    <td><?php echo date("d M", $data); ?></td>
                    <td><?php echo $dados[1]; ?></td>
                    <td><?php echo $dados[2]; ?></td>
                </tr>

        <?php endforeach; ?>

            </tbody>
        </table>
    </body>
</html>
