<?php

session_start();

//visualizar o que está na sessão
//print_r($_SESSION);

if(isset($_SESSION['data']) &&
        isset($_SESSION['hora']) &&
        isset($_SESSION['matricula'])){

    echo "Data: ", $_SESSION['data'],
            "<br> Hora: ", $_SESSION['hora'],
            "<br> Matrícula: ", $_SESSION['matricula'];

    }
?>
<p><a href="excluir_var.php">Excluir variável da sessão</a></p>
