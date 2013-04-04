<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $parametros = "teste de dados para get  ação";
        $cod = urlencode($parametros);
        echo "<a href='strings2.php?par=$cod'>
                Teste função urlencode</a>";
        
        //Essa codificação ajeita a url para tirar caracteres especiais. 
        //Se você quiser usar o texto depois, sem problemas. O PHP já faz
        //a decodificação, só substituindo caracteres especiais por + na URL mesmo.
        
        $texto = "\t\t teste do texto ... \t";
        echo "<br>";
        var_dump($texto);
        echo "<br>";
        var_dump(trim($texto));
        //Note que, no navegador, não se notará nada diferente, pois o 
        //\t não fará efeito na formatação. No entanto, o var_dump acusará
        //que a segunda versão tem menos caracteres depois da tabulação retirada,
        //e diferença poderá ser notada também no código fonte.
        
        $texto2 = "Teste de Texto";
        $texto3 = trim($texto2, 'To');
        echo "<br>";
        var_dump(trim($texto3));
        ?>
    </body>
</html>
