<?php
$aluno = array("matricula" => 89898,
               "nome" => "Francisco",
               "cpf" => "999999999",
               "nascimento" => "10/10/1970",
               "estado_civil" => "solteiro");

echo "Dados do array: <br>";
foreach($aluno as $ind => $dado){
    echo "<br> $ind: $dado";
}

echo "<p>";
asort($aluno);
foreach($aluno as $ind => $dado){
    echo "<br> $ind: $dado";
}
echo "</p>";

echo "<p>";
ksort($aluno);
foreach($aluno as $ind => $dado){
    echo "<br> $ind: $dado";
}
echo "</p>";

$teste = array("img1", "img2", "img10", "img20", "img0");
sort($teste);
echo "<br>";
foreach($teste as $valor)
    echo "<br> $valor";

$teste = array(10, 2, 89, 1, 0);
sort($teste);
echo "<br>";
foreach($teste as $valor)
    echo "<br> $valor";

$teste = array("img1", "img2", "img10", "img20", "img0");
sort($teste, SORT_NATURAL); //Nesse caso, o parâmetro natural faz com que o sort
//organize de maneira correta os números. Pois como é string, ele, sem o parâmetro,
//organiza como img1, img10, img2, img20
//uma variante é: natsort($teste);
echo "<br>";
foreach($teste as $valor)
    echo "<br> $valor";
?>
