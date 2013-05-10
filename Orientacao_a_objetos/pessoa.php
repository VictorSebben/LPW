<?php

// The code below creates the class
class Person {

    // Creating some properties (variables tied to an object)
    private $isAlive = true;
    private $firstname;
    private $lastname;
    private $age;

    // Assigning the values
    public function __construct($firstname, $lastname, $age) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
    }

    // Creating a method (function tied to an object)
    public function greet() {
        return "Hello, my name is " . $this->firstname . " " . $this->lastname . ". Nice to meet you! :-)";
    }

}

class Estudante extends Person {
    private $id;
    public function __construct($firstname, $lastname, $age, $id) {
        //Façamos uma referência ao construtor da classe pai
        //A sintaxe abaixo faz com que possamos utilizar o construtor
        //da classe pai, sem instanciar um objeto dela.
        Person::__construct($firstname, $lastname, $age);
        //Poder-se-ia ter usado, também, a palavra chave parent

        $this->id = $id;
    }

    //Como os construtores, __toString é um método mágico (todos eles
    //começa com __).
    public function __toString() {
        return "teste";
    }

}
$me = new Estudante('Joaquim', 'Teste', 24,22);
// Printing out, what the greet method returns
echo $me->greet();
echo "<br/>", $me;

?>