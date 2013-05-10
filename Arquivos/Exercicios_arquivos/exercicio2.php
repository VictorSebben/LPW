<?php
define('ARQ', '../arqs/exer2.txt');

$conteudo = leArquivo(ARQ);
echo '<h1>Conteúdo do arquivo:</h1>';

if($conteudo){
    foreach($conteudo as $data)
        echo "<p>$data</p>";
}
else
    echo "Erro ao abrir o arquivo.";

function leArquivo($filePath){
    if($pta = fopen($filePath, 'r')){
        $arrayConteudo = explode("#", fread($pta, filesize($filePath)));

        return $arrayConteudo;
    }
    else
        return false;
}
?>
