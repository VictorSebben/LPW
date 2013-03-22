<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Parcelador Ostrobaltakus</title>
    </head>
    <body>
        <?php
        setlocale(LC_TIME, "pt_BR.UTF-8");

        if(isset($_POST['enviar'])){
            //Os pagamentos começam no dia de hoje
            $data = time();
            //Valor colocado no formulário
            $valor = $_POST['valor'];
            //Número de parcelas
            $num_parcelas = $_POST['num_parcelas'];
            //Valor de cada parcela
            $parcela = $valor / $num_parcelas;
            //Intervalo de pagamento (de x em x dias)
            $intervalo = $_POST['intervalo'];

            //Resto das parcelas além de duas casas depois da vírgula
            $par = $parcela * 100;
            $resto = ($par - floor($par));
            $resto /= 100;
            $resto *= ($num_parcelas - 1);

            //O valor de cada parcela
            $par = floor($par);
            $par /= 100;

            //OBS: number_format($valor, 2, ',', '.');
            //informa o valor, casas decimais, separador decimal, separador de miles
            //O round arredonda para decimais, para cima. Pode especificar quantas casas decimais quer

            //Mostrar parcelas.
            for($i = 1; $i <= ($num_parcelas - 1); $i++){
                if($i == 1){
                    $listar = '<li>' . "$i - " . date("d/m/Y", $data) . " - R$" . $par . '</li>';
                }
                else{
                    $listar .= '<li>' . "$i - " . date("d/m/Y", $data) . " - R$" . $par . '</li>';
                }
            }

            //O resto é somado nessa última parcela, mostrada fora do for
            $data += ($intervalo * 24 * 60 * 60);
            $listar .= '<li>' . "$num_parcelas - " . date("d/m/Y", $data) . " - R$" .
                    round(($parcela + $resto), 2) . '</li>';

            echo '<h1>Parcelas</h1>';
            echo '<ul>' . $listar . '</ul>';
            echo '<br>Total: R$', $_POST['valor'];
        }
        ?>
    </body>
</html>
