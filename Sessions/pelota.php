<?php

session_start();

if(isset($_SESSION['login'])){
    echo "Sessão iniciada com sucesso.";
}
else
    echo "Deu merda na sessão.";

?>
