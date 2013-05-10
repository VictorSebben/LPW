<?php
if($pta = fopen("../arqs/exer1.txt", "a")){
    fwrite($pta, date("d/m/Y - H:i:s") . ';');
    fclose($pta);
    echo "Dados gravados com sucesso.";
}
else
    echo "Epa. Deu problema ao tentar abrir o arquivo. Tente novamente mais tarde."
?>
