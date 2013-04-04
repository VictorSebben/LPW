<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $ultimo_dia = array(20, 19, 20, 20, 20, 20, 21, 22, 22, 22, 21, 21);
        $signos = array('Capricórnio', 'Aquário', 'Peixes', 'Áries', 'Touro',
            'Gêmeos', 'Câncer', 'Leão', 'Virgem', 'Libra', 'Escorpião', 'Sagitário');

        if(isset($_POST['checar_signo'])){
            //ao explodir, obtemos $data[0] = dia, $data[1] = mês
            $data = explode('/', $_POST['data']);

            if($data[0] <= $ultimo_dia[($data[1] - 1)])
                $signo = $signos[($data[1] - 1)];
            else if($data[1] != 12)
                $signo = $signos[($data[1])];
            else
                $signo = $signos[0];

            echo '<h2>Seu signo é: ' . $signo . '</h2>';
        }
        ?>
    </body>
</html>
