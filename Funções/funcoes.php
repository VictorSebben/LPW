<?php

//Soma de valores de um vetor - recebe um vetor e retorna a soma de seus elementos
function soma_vetor($v){
    $soma = 0;
    foreach($v as $valor){
        $soma += $valor;
    }
    return $soma;
}

?>
