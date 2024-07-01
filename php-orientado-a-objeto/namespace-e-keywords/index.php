<?php
    include('class1.php');
    include('class2.php');
    use \Sessao1\Class1 as class_1; // O termo "as" é utilizado para renomear a classe importada.

    $class1 = new class_1();
?>