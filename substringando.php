<?php
$teste = "teste@teste.teste";

$parte = substr($teste, 3, 6);
echo "<br> Parte da string: $parte <br>";

//Se não colocar o terceiro parâmetro, a substring pega até o final, a partir
//da posição indicada.

$parte = substr($teste, 3, -1);
echo "<br> Parte da string: $parte <br>";
//Se coloco um valor negativo, ele considera a partir do final. Nesse caso, pega
//da posição 3 até um a menos que o último.
?>
