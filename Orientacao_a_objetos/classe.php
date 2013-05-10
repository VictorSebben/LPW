<?php
/* Classe de exemplo */
class Pessoa{

    private $idade;
    private $ordem;

    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
    }
    public function getOrdem() {
        return $this->ordem;
    }
    public function setOrdem($ordem) {
        $this->ordem = $ordem;
    }
} //Fim da classe Pessoa

/* O array que vamos colocar os objetos*/
$array_objetos = array();
/* 6 objetos pessoa com atributos aleatorios */
for($i = 0; $i < 6; $i++){
    $objeto = new Pessoa();
    $objeto->setIdade(rand(20,60));
    $objeto->setOrdem(rand(0,30));

    $array_objetos[] = $objeto; //atribui para o próximo índice livre
};
/* Mostrando o array de objetos criado */
echo "<h1>Array de objetos desordenados</h1><br>";
foreach ($array_objetos as $ob){
    echo "<br/>", $ob->getIdade();
}
var_dump($array_objetos);
echo "<p><hr></p>";
?>
