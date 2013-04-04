<?php
//Primeiro, vamos setar o timezone (para ele usar America/Sao_Paulo independentemente do que está configura no servidor (php.ini)
date_default_timezone_set("America/Sao_Paulo");

//datas1.php
$nasc = mktime(3, 30, 0, 7, 11, 1987);
echo "Segundos: $nasc";

$dia_semana = date("w", $nasc); //date, com o parâmetro w, retornará um valor numérico
//que representa o dia da semana (0 a 6)
echo "<br>Dia da semana: $dia_semana";

$dias = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado');
echo "<br>Dia da semana: $dias[$dia_semana]";

$hoje = time();
echo "<br>Segundos hoje desde 01/01/1970: $hoje";

echo "<br>Agora: ", date("d/m/Y - H:i:s");

echo "<br>Timezone setado: " . date_default_timezone_get();

//No exemplo abaixo, tentamos usar dia 32. Ele passa para o próximo dia (o último dia é 31 --> portanto, mostrará dia 1.
echo "<br>", date("d/m/Y", mktime(0,0,0,12,32,2012));
//Aqui, o mesmo --> colocamos mês 13, ele volta para o mês 1.
echo "<br>", date("d/m/Y", mktime(0,0,0,13,1,2012));

//Consideremos que a data da prova seja daqui 60 dias. Como descobrir que dia será?
$data_prova = time() + (60 * 24 * 60 * 60);
//Aqui: time retorna o n de segundos de 1970 até agora. A isso, somamos os segundos de mais 60 dias
echo "<br>Data da prova: ",  date("d/m/Y", $data_prova);

//Número de segundos desde 1970 até o dia da prova:
$segundos = mktime(19, 0, 0, 5, 2, 2013);
$falta = $segundos - time(); //O que há de segundos até a prova menos a data atual
$dias = intval($falta / (24*60*60)); //O que falta dividivo por quantos seg tem um dia retorna quantos dais falta
//O intval arredonda o número. 
echo "<br>Faltam $dias dias para a prova.";
?>
