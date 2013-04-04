<?php

//Definindo uma função em PHP
function fteste($a, $b){
    return $a + $b;
}

//Chamando uma função em PHP
echo fteste(3, 5);

$x = 8;
$y = 89;
echo '<br>' . fteste($x, $y);

/*
 * Por padrão, as variáveis são passadas por valor, e não por referência.
 * A seguir, mostramos como se pode passar valores por referência em PHP.
 */
function fteste2(&$num){
    $num *= 2;
}

$n = 2;
fteste2($n);

echo '<br>Valor de n: ' . $n;

//Ao definir uma função, posso inicializar um valor para os parâmetros.
//Esse valor padrão será usado caso a função seja chamada sem os parâmetros.
function fteste3($v1 = 0, $v2 = 2){
    return $v1 + $v2;
}

//Passaremos um parâmetro: para o segundo, portanto, a função usará o valor padrão.
echo '<br>Resultado: ', fteste3(4);

//Nesse contexto, pode-se inicalizar uma variável com valor nulo (null).

/*-----------------------------------------------------------------------------*/

//Em PHP, podemos passar arrays como parâmetro, por valor ou referência.

?>
