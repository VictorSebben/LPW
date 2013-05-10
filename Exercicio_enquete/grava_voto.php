<?php

if(isset($_POST['enviar'])){

    if(!verifica_cookie()){
        $voto = $_POST['enquete'];
        salva_dados($voto);
        $porcentagem = retorna_porcentagem();

        include 'mostra_resultado.html.php';
        exit();
    }
    else{
        echo 'Lamento. Você só pode votar uma vez.';
        echo '<br><a href="excluir_cookie.php">Destruir cookie</a>';
    }
}



/*
 * Função que grava dados no arquivo
 */
function salva_dados($voto){
    $pta = fopen("enquete.txt", "r");
    $contador = 0;
    $dados_arquivo = "";

    while($linha = fgets($pta)){
        if($contador == $voto){
            $dados = explode(";", trim($linha));
            $dados[1]++;
            $dados_arquivo .= $dados[0] . ';' . $dados[1] . "\n";
        }
        else
            $dados_arquivo .= $linha;

        $contador++;
    }

    fclose($pta);

    $salvador = fopen("enquete.txt", "w");
    fwrite($salvador, $dados_arquivo);
    fclose($salvador);
}


/*
 * Função que retorna a porcentagem de votos para cada opção
 */
function retorna_porcentagem(){
    /*
     * Para cada linha, é necessário guardar os votos em uma variável $total.
     * Além disso, grava-se a quantidade de votos da linha (pode-se usar um contador...
     * ...para identificar a linha.
     */

    $total_votos = 0;

    if($pta = fopen("enquete.txt", "r")){
        for($i = 0; $i < 4; $i++){
            $linha = fgets($pta);
            $dados = explode(";", $linha);
            $total_votos += $dados[1];
            $arr_votos[$i] = $dados[1];
        }
    }

    for($i = 0; $i < 4; $i++){
        $porc_votos[$i] = ($arr_votos[$i] / $total_votos) * 100;
    }

    return $porc_votos;
}


/*
 * Função que verifica se a pessoa já votou. Se não, seta a cookie retorna true.
 * Se a pessoa já votou, retorna false.
 */
function verifica_cookie(){
    if(isset($_COOKIE['votou']))
        return true;
    else{
        setcookie('votou', 1, time() + (2 * 60 * 60));
        return false;
    }
}

?>
