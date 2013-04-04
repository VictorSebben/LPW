<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $alunos = array(array('matricula' => 5555, 'nome' => 'Maréia', 
            'email' => 'maria@teste.com.br'),
            array('matricula' => 5556, 'nome' => 'Ostrobaldo',
                'email' => 'ostro@ostro.com.br'),
            array('matricula' => 5557, 'nome' => 'Marcobaldo',
                'email' => 'marco@ostro.com.br'));
        
        /*Poderia ser assim: 
         * $alunos = array(
         * ['matricula' => 5555, 'nome' => 'Maréia', 'email' => 'mar@mar.com.br'],
         * [...],
         * ...
         * )
         */
        
        echo '<pre>'; print_r($alunos); echo '<pre>';
        ?>

        
        <table border="1">
            <tr>
                <th>Matrícula</th><th>Nome</th><th>E-mail</th>
            </tr>
        <?php
        foreach ($alunos as $aluno) { ?>
            <tr>
            <?php foreach($aluno as $chave => $valor){ ?>
                <td><?php echo $valor; ?></td>
        <?php    }  ?>
            </tr>
        <?php
        }
        ?>
        </table>
    </body>
</html>
