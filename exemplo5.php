<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $salario = 800;
        $valor = ($salario > 1000) ? ($salario * 0.5) : ($salario * 0.8);
        
        echo "Valor: $valor.";
        
        $dados = array('nome' => 'José',
            'cpf' => '0909090909',
            'nascimento' => '10/10/1990',
            'email' => 'teste@teste.com.br',
            'idade' => 22);
        
        echo '<pre>'; print_r($dados); echo '</pre>';
        
        echo '<p>';
        foreach($dados as $indice => $valor):
            echo "$indice: $valor<br>";
        endforeach;
        echo '</p>';
        ?>
    </body>
</html>
