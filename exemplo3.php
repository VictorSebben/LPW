<!DOCTYPE html>
<html>
  <head>
    <title>Example 3 - PHP Studies</title>
  </head>
  <body>
    <?php
    if(isset($_GET['btnEnviar'])){
        echo '<pre>' ; print_r($_GET) ; echo '</pre>';
    }
    
    echo 'Nome: ' . $_GET['nome'] . '<br>';
    echo 'E-mail: ' . $_GET['email'] . '<br>';
    if(isset($_GET['status']))
        echo 'Status: ativado';
    else {
        echo 'Status: desativado';
    }
    ?>
  </body>
</html>


