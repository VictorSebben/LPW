<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
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
                    <td><?php echo round($porcentagem[0]); ?>%</td>
                </tr>
                <tr>
                    <td>Sim, algumas vezes</td>
                    <td><?php echo round($porcentagem[1]); ?>%</td>
                </tr>
                <tr>
                    <td>Não</td>
                    <td><?php echo round($porcentagem[2]); ?>%</td>
                </tr>
                <tr>
                    <td>Não sei</td>
                    <td><?php echo round($porcentagem[3]); ?>%</td>
                </tr>
            </tbody>
        </table>

        <div class="link-voltar"><a href=".">Voltar</a></div>
    </body>
</html>
