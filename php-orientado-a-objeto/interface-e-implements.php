<?php
    include('./interface1.php');

    /*/
        Implements é uma palavra reservada que serve para implementar uma interface.
    */

    class Teste implements Interface1{ // Implementação da interface
        public function printOnScreen($texto){
            echo $texto;
        }
    }

    $teste = new Teste;
    $teste->printOnScreen('Olá, mundo!');
?>