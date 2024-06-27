<?php

    /*/ se usar a palavra "final" antes da classe, não será possível herdar a classe, 
       ex: se colocarmos "final class Pai", a classe "Filha" não poderá herdar a classe "Pai"
    */

    class Pai{
        public $nome = "João";
        private $idade = 25;

        protected function PrintNome(){
            return $this->nome;
        } // protected só pode ser acessado por classes que herdam a classe que contém o método

        public function seApresenta(){
            echo "olá pessoal, tudo bem? eu sou " . $this->nome . "<br>";
        }

        public function printIdade(){
            $this->digaIdade();
        }

        private function digaIdade(){
            echo "eu tenho " . $this->idade . " anos";
        } // private só pode ser acessado pela própria classe
    }

    class Filha extends Pai{ // extends é usado para herdar uma classe (ou seja, a classe "Pai" herda todos os metodos e atributos da classe "Filha")
        
        public $nomeFilha = "Maria";
        public function apresentarPai(){
            echo "Olá pessoal, eu sou " . $this->nomeFilha . "<br>";
            echo "Meu pai é " . $this->PrintNome() . "<br>";
            $this->seApresenta();
            $this->printIdade();
            //echo $this->funcaoTeste2(); // Não é possível acessar o método privado, pois ele só pode ser acessado pela própria classe
        }
    }

    $filha = new Filha();
    $filha->apresentarPai();

?>