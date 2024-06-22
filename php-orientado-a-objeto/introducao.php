<?php
    class Pessoa{
        // objeto pessoa
        private $nome = 'Wilson'; // uma propriedade (atributo) privada só pode ser acessada de dentro da classe
        private $idade = 20;
        private $peso = 95;

        public function crescer(){ // uma função dentro de uma classe é chamada de método
            // uma metodo do tipo public pode ser acessado de fora da classe
            $this->comer();
            echo 'estou crescendo';
        }

        private function comer(){ // um metodo do tipo private só pode ser acessado de dentro da classe
            echo 'estou comendo';
        }
    }

    // Instaciar (ou seja criar um objeto a partir de uma classe)
    $pessoa = new Pessoa();
    $pessoa->crescer(); // acessando o método crescer
?>