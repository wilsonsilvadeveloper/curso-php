<?php

    /*/
        O uso de namespaces é uma forma de organizar classes e funções em grupos, evitando conflitos de nomes.
        Para utilizar um namespace, basta utilizar a palavra reservada namespace seguida do nome do namespace.
    */

    namespace Sessao1;
    use \Sessao2\Class2 as class_2; // Utilizando a palavra reservada use, é possível importar classes de outros namespaces.

    class Class1{
        public function __construct(){
            echo 'Class1 instanciada';
            new class_2();
        }
    }
?>