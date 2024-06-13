<?php

    /*/ 
        Operadores de comparação são utilizados para comparar valores
        e retornar um valor booleano (true ou false).

    */

    $number = 10;
    $number2 = '10';

    if($number == 10){ // se $number for igual(==) a 10
        echo 'O número é igual a 10';
    } else {
        echo '<br/>O número não é igual a 10';
    }

    if($number != 2){ // se $number for diferente(!=) de 2
        echo '<br/> O número é diferente de 2';
    } else {
        echo '<br/> O número não é diferente de 2';
    }

    if($number === $number2){ // verifica se os valores são iguais e do mesmo tipo (===)
        echo '<br/> Os números são iguais e do mesmo tipo';
    } else {
        echo '<br/> Os números não são do mesmo tipo ou iguais';
    }

    if($number < 8) { // verifica se o número é menor(<) que 8
        echo '<br/> O número é menor que 8';
    } else {
        echo '<br/> O número é maior que 8';
    }

    if($number <= 10) { // verifica se o número é menor ou igual(<=) a 10
        echo '<br/> O número é menor ou igual a 10';
    } else {
        echo '<br/> O número é maior que 10';
    }

    if($number > 5) { // verifica se o número é maior(>) que 5
        echo '<br/> O número é maior que 5';
    } else {
        echo '<br/> O número é menor que 5';
    }

    if($number >= 10) { // verifica se o número é maior ou igual(>=) a 10
        echo '<br/> O número é maior ou igual a 10';
    } else {
        echo '<br/> O número é menor que 10';
    }

    if(($number == 10) && ($number2 == 10)) { // verifica se as duas condições são verdadeiras (&&)
        echo '<br/> Os números são iguais a 10';
    } else {
        echo '<br/> Os números não são iguais a 10';
    }

    if(($number == 10) || ($number2 == 10)) { // verifica se uma das condições é verdadeira (||)
        echo '<br/> Um dos números é igual a 10';
    } else {
        echo '<br/> Os números não são iguais a 10';
    }

    if(($number == 10 || $number2 == 5) && ($number2 == 10)) { // verifica se uma das condições da primeira expressão é verdadeira e a segunda expressão é verdadeira
        echo '<br/> O número é igual a 10';
    } else {
        echo '<br/> O número não é igual a 10';
    }

    if(!($number == 10)) { // verifica se a condição é falsa (!)
        echo '<br/> O número não é igual a 10';
    } else {
        echo '<br/> O número é igual a 10';
    }
?>