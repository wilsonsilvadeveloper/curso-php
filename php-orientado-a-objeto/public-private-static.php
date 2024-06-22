<?php
    include('exemplo.class.php');
    // Instaciar (ou seja criar um objeto a partir de uma classe)
    $exemplo = new Exemplo();
    $exemplo->var2 = 'Wilson';
    echo $exemplo->var2;

    // instanciando um novo objeto
    $exemplo2 = new Exemplo();
    echo $exemplo2->var2; // não vai imprimir nada pois o atributo var2 não tem nenhum valor atribuido a ele
    $exemplo2->var2 = 'Gil'; // atribuindo um valor ao atributo var2
    echo '<br/>';
    echo $exemplo2->var2; // agora vai imprimir Gil
    echo '<br/>';

    echo Exemplo::$var3; // acessando uma variável estática
    Exemplo::$var3 = 'static alterado'; // alterando o valor da variável estática
    echo '<br/>';
    echo Exemplo::$var3; // imprimindo o novo valor da variável estática
    echo '<br/>';
    Exemplo::metodo3(); // chamando um método estático
    echo '<br/>';

    $exemplo->setVar1('Wilson'); // chamando um método público
    echo $exemplo->getVar1(); // chamando um método público
?>