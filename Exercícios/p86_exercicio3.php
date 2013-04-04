<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Dia da Semana</title>
    </head>
    <body>
        <?php
        setlocale(LC_TIME, "ptb", "pt_BR.UTF-8");

        $vetor = array("10/04/2011", "14/04/2011", "21/04/2011", "01/05/2011",
            "07/09/2011", "20/09/2011");
        ?>

        <h1>Array de datas:</h1>
        <?php foreach($vetor as $data):
            $diaMesAno = explode("/", $data);
        ?>

        <p><?php echo strftime("%d/%m/%G - %A", mktime(0, 0, 0, $diaMesAno[1],
                $diaMesAno[0], $diaMesAno[2])); ?></p>

        <?php endforeach; ?>
    </body>
</html>
