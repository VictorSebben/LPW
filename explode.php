<?php
//No explode, o caractere fornecido para delimitador fica de fora do array gerado

$data = "05/09/1975";
$vetor_data = explode("/", $data);

echo "Dia: $vetor_data[0] <br>",
        "Mês: $vetor_data[1] <br>",
        "Ano: $vetor_data[2] <br>";
?>
