<?php
/* Abrir e ler linha a linha o arquivo. */
$arquivo = "arqs/texto.txt";
if(file_exists($arquivo)){ //note-se que esse teste só testa se o arquivo existe. Ele pode não poder ser aberto por, por exemplo, falta de permissão.
    $pta = fopen($arquivo, 'r');

    //Vamos mostrar o número da linha e o conteúdo, até o fim do arquivo.
    $lin = 1;
    while(!feof($pta)){
        echo "<br> $lin: " . fgets($pta);
        $lin++;
    }
}
else
    echo "Arquivo não encontrado.";
?>
