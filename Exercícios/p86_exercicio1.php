<?php
if(isset($_POST['texto'])){
    $texto = $_POST['texto'];
    
    //Mostrar texto em maiúsculas com a função strtoupper
    echo '<p>a) Texto em maiúsculas: ' . strtoupper($texto) . '</p>';
    
    //Mostrar texto em minúsculas com a função strtolower
    echo '<p>b) Texto em minúsculas: ' . strtolower($texto) . '</p>';
    
    //A função ucfirst retorna a string com apenas a primeira letra maiúscula
    echo '<p>c) Texto com primeira letra em maiúscula: ' . ucfirst($texto) . '</p>';
    
    //Utilizar a função nl2br para transformar caracteres newline em tags <br>
    echo '<p>d) Texto com tags br: ' . nl2br($texto) . '</p>';
    
    //Retornar texto sem tags HTML com a função strip_tags
    echo '<p>e) Texto sem tags HTML: ' . strip_tags($texto) . '</p>';
    
    //Retornar comprimento da string com strlen
    echo '<p>f) O texto tem ' . strlen($texto) . ' caracteres</p>';
    
    //Os 5 primeiros caracteres podem ser retornados com a função substr (substring)
    echo '<p>g) Os 5 primeiros caracteres são: ' . substr($texto, 0, 5) . '</p>';
}
?>
