<?php

if(isset($_POST['enviar'])){
    $km = $_POST['km'];
    $litros = $_POST['litros'];

    echo '<h2>Seu carro faz: ' . round($km / $litros, 2) . ' km/l.</h2>';
}

?>
