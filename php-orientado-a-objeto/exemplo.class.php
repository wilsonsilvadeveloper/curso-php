<?php
    class Exemplo {
        private $var1;
        public $var2;
        
        // uma variavel estática é uma variável que pertence a classe e não ao objeto
        // para acessar uma variável ou metodo static não é necessário instanciar a classe, basta chamar a classe e o nome da variável ou metodo;
        public static $var3 = 'static';
        
        // public funciona em qualquer lugar fora da classe
        public function metodo(){
            echo 'Método chamado de forma publica';
        }

        // private só funciona dentro da classe
        private function metodo2(){
            echo 'Método chamado de forma privada';
        }

        // um método estático é um método que pertence a classe e não ao objeto
        public static function metodo3(){
            echo 'Método chamado de forma estática';
        }

        public function setVar1($var1){
            $this->var1 = $var1; /*/ o this é uma palavra reservada que faz referencia ao objeto que está chamando o método.
             ou seja, se eu chamar o método setVar1 de um objeto, o this vai fazer referencia a esse objeto,
             quando fazemos $this->var1 = $var1, estamos dizendo que o atributo var1 do objeto que chamou
             o método vai receber o valor que foi passado como parâmetro para o método setVar1
             */
        }

        public function getVar1(){
            return $this->var1; // retorna o valor do atributo var1
        }
    }
?>