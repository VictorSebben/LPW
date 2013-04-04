<?php
/*
 * Aqui, abriremos o arquivo e leremos tudo o que aí há.
 */

//Verificaremos, antes, se será possível abrir com sucesso o arquivo.
if($pta = fopen("arqs/texto.txt", "r")){
    $dados = fread($pta, filesize("arqs/texto.txt"));

    //Vamos mostrar o tamanho do arquivo.
    $tam = filesize("arqs/texto.txt");
    echo "<p>Tamanho do arquivo (em bytes): $tam</p>";

    //Convertemos as quebras de linha para HTML, para que o navegador
    //as mostre, antes de utilizar o echo.
    echo nl2br($dados);
}
?>
