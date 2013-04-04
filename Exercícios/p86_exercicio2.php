<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Exercício 2</title>
    </head>
    <body>
        <?php
        $notas = array("2314" => 8.6,
            "9893" => 8.4,
            "3532" => 8.9,
            "2342" => 8.5);

/* Organizar o array de notas em ordem decrescente */
        $notas_decr = arsort($notas);
        ?>

        <table border="1">
            <thead>
                <tr>
                    <th>Matrícula</th>
                    <th>Média</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($notas as $matricula => $nota): ?>
                    <tr>
                        <td><?php echo $matricula; ?></td>
                        <td><?php echo $nota; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>
