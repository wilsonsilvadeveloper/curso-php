<?php

    /*/
        condições na programação, é uma forma de verificar valores e executar
        ações com base nesses balores.
    */

    $nome1 = 'Wilson';
    $nome2 = 'Wilson';

    if($nome1 == $nome2){ // se $nome1 for igual a $nome2
        echo '<div style="width:300px;height:300px;background:red;"></div>';
    } else { // se $nome1 não for igual a $nome2
        echo 'a condição não bate';
    }

    $idade = 18;
    if($idade >= 18){ // se a idade for maior ou igual a 18
        echo '<br/> Você é maior de idade';
    } else if($idade <= 0) { // se a idade for menor ou igual a 0
        echo '<br/> idade invalida';
    } else { // se a idade for menor que 18 e maior que 0
        echo '<br/> Você é menor de idade';
    }

    $bol = false;

    if($bol){ // se $bol for verdadeiro (true)
        echo '<br/> verdadeiro';
    } else { // se $bol for falso (false)
        echo '<br/> falso';
    }
?>