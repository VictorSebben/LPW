<?php

if(isset($_POST['enviar'])){
    $data = $_POST['data'];
    /* dd/mm/aaaa */

    $dt = explode('/', $data); //-> é possível explodir e armazenar em um array

    //Poderia usar uma lista de variáveis também: list($dia, $mes, $ano) = explode('/', $data);

    if(sizeof($dt) == 3){
        if(checkdate($dt[1], $dt[0], $dt[2]))
            echo "$data - Data válida";
        else
            echo "$data - Data inválida";
    }
    else
        echo "Data inválida";
}

?>
