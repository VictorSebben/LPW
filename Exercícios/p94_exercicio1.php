<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Substituição de Strings</title>
    </head>
    <body>
        <?php

        function repl_string($vetor, $string_velha, $string_nova){
            for($i = 0; $i < count($vetor); $i++){
                if(strcmp($string_velha, $vetor[$i])){
                    $vetor[$i] = $string_nova;
                }
            }

            sort($vetor);
            return $vetor;
        }


        $vetor = array("batata", "potato", "batata", "lorem", "ipsum");
        echo "<p>Vetor original:</p>";
        foreach($vetor as $vet)
            echo $vet . '<br>';

        $novo_vetor = repl_string($vetor, "batata", "cenoura");
        echo "<p>Novo vetor:</p>";
        foreach($novo_vetor as $vet)
            echo $vet . '<br>';


        ?>
    </body>
</html>
