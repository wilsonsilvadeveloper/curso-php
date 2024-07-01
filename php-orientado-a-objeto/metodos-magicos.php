<?php
    class Pessoa{
        private $nome;
        private $idade;

        /*/
            Metodos magicos são métodos que são chamados automaticamente quando determinadas ações acontecem,
            como no exemplo abaixo, o método "__construct" é chamado automaticamente toda vez que um objeto é instanciado.   
        */
        
        public function __construct($nome, $idade){
            $this->nome = $nome;
            $this->idade = $idade;
        } // método construtor é chamado toda vez que um objeto é instanciado, ao ser executado ele atribui valores aos atributos da classe

        public function getNome(){
            return $this->nome;
        }

        public function getIdade(){
            return $this->idade;
        }
    }

    $pessoa = new Pessoa('Wilson', 20);
    echo $pessoa->getNome();
    echo '<br/>';
    echo $pessoa->getIdade();
?>