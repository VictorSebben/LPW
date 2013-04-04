<?php
$nome = "passo fundo";
echo "ucfirst: ", ucfirst($nome),
        "<br> ucwords: ", ucwords($nome),
        "<br> strtoupper:", strtoupper($nome),
        "<br> strtolower:", strtolower($nome);

echo "<p>";
$data = "14/03/2013";
echo "<br> Substituição de string: ",
 str_replace("/", "-", $data);
echo "</p>";
?>
