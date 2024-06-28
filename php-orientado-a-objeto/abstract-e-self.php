<?php
    abstract class Teste{
        public function func1(){
            echo 'func1';
        }

        abstract function func2(); // Método abstrato não pode ter corpo na classe abstrata
    }

    class Principal extends Teste{
        public function func2(){
            echo "<br/> declarando oficialmente o método abstrato";
        }

        public static function metodoEstatico(){
            echo "<br/> Método estático";
        }

        public function chamaMetodoEstatico(){
            Principal::metodoEstatico(); // chamando um método estático diretamente na instância da classe principal
            self::metodoEstatico(); // chamando um método estático diretamente na instância da classe principal
        }
    }

    // $teste = new Teste; Não é possível instanciar uma classe abstrata, pois essa só pode ser herdada
    $principal = new Principal;
    $principal->func1();
    $principal->func2(); 
    // Principal::metodoEstatico(); // chamando um método estático
    $principal->chamaMetodoEstatico();
?>