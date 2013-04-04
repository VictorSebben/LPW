<!DOCTYPE html>
<html lang='pt-br'>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Data - Versão 2</title>
        <style type='text/css'>
            html { font-family: 'Verdana', 'Helvetica', 'Arial'; color: blue; background-color: #CFCFCF;}
            body { width: 600px; margin: 0 auto; background-color: #DFDFDF; padding: 1em;}
            h1, h2, h3 { color: #555; font-size: 1.3em; font-weight: normal; }
            ul { list-style: none; }
            hr { background-color: lightgray; border: 0 none; height: 1px; }
        </style>
    </head>
    <body>

        <h1>Dias da semana - versão 2</h1>

        <?php

        $vetor = array('10/04/2011', '14/04/2011', '21/04/2011', '01/05/2011', '07/09/2011', '20/09/2011');

        /**
* Os formatos com % respeitam o setlocale. %A é o dia da semana por extenso. %a é
* uma abreviação do dia da semana.
*/
        setlocale(LC_TIME, 'pt_BR.UTF-8'); // O servidor de ter a linguagem instalada.

        echo '<ul>';
        foreach ($vetor AS $item):
            echo '<li>', $item, ' - ', ucfirst(strftime('%A', strtotime(str_replace('/', '.', $item)))), '</li>';
        endforeach;
        echo '<ul>';

        ?>

</body>
</html>
