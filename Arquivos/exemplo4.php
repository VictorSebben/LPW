<?php
/*
 * Uso do fseek.
 */
$arquivo = "arqs/texto.txt";
if($pta = fopen($arquivo, "r")){
    //Vamos posicionar o cursor 10 bytes antes do final.
    //Lembre-se que um caracter normal vale um byte, mas um com acento, por exemplo, ocupa dois bytes.
    fseek($pta, -10, SEEK_END);
    echo "<br>Dados lidos: " . fread($pta, 5);

    fseek($pta, 1, SEEK_CUR);
    echo "<br> Novos dados lidos: " . fread($pta, 2);
    fclose($pta);
}
?>
