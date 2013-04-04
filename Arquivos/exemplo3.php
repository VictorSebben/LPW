<?php
/*
 * Abrir arquivo e escrever nele.
*/

/*
 * É importante testar, pois pode ser que não existe permissão
 * para criar o arquivo caso ele não exista, ou abri-lo caso exista.
 */
$arquivo = "arqs/texto2.txt";
if($pta = fopen($arquivo, "a+")){
    /*
     * Vamos gravar no arquivo a data e hora atuais.
     */
    fwrite($pta, date("d/m/Y - H:i:s") . "\n");
    fclose($pta);
    echo "Teste - gravando dados no arquivo...";
}
else
    echo "Deu merda ao tentar criar/abrir o arquivo!";
?>
