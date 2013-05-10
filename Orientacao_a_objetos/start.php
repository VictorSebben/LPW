<?php

class Calculadora{
    //Criando atributos privados na classe
    private $mais;
    private $menos;

    //Criando um método público
    public function somar ($a, $b){
        $this->mais = "Somar";
        return $a + $b;
    }

    //Criando um construtor
    public function __construct($num) {
        $this->menos = $num;
    }
}

//Instanciando nosso objeto
$calc = new Calculadora(1);

echo $calc->somar(4, 5);
?>
