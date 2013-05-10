<?php
define('ARQ', '../arqs/exer2.txt');
$conteudo = leNBytesDoArquivo(ARQ, 10);
if($conteudo)
    echo $conteudo;
else
    echo "Deu zebra ao abrir o arquivo. Putz cara. É foda!";

function leNBytesDoArquivo($caminho, $numBytes){
    if($pta = fopen($caminho, 'r')){
        //ler arquivo de acordo com o num de bytes especificado
        $dados = fread($pta, $numBytes);
        if($dados != NULL)
            return $dados;
        else
            return false;
    }
    else
        return false;
}
?>
