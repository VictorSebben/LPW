<?php

$contador = 0;

if($pta = fopen("arqs/notas.txt", "r")){
    while(!feof($pta)){
        $linhas[] = fgets($pta);
        $contador++;
    }

    foreach($linhas as $linha)
        echo nl2br($linha);

    fclose($pta);
}
else
    echo "Erro ao tentar abrir o arquivo. Consulte a assistência técnica.";

?>
