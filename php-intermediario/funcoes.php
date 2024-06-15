<?php
    /*/
        Funções são blocos de códigos que podem ser reutilizados em diferentes partes do código.
        Para criar uma função, usamos a palavra reservada 'function' seguida do nome da função
        e dos parênteses. O código da função é colocado entre chaves. Existem funções nativas da 
        propria linguagem de programação (no estamos usando a linguagem de programação php),
        e funções ciradas pelos usuários.
    */

    // exemplo de função nativa
    $arr = array(1, 2, 3, 4, 5); // o 'array()' é uma função nativa do php

    // exemplo de função criada pelo usuário
    function printNome() { // criando uma função chamada 'printNome'
        echo 'Wilson'. '<br/>'; // exibindo a palavra 'Wilson'
    }

    // a função printNome() foi criada, mas ainda não foi chamada, e pra ser executada, precisamos chamar a função.
    printNome(); // chamando a função printNome()

    // exemplo de função com parâmetros
    function soma($a, $b) { // criando uma função chamada 'soma' que recebe dois parâmetros
        $soma =  $a + $b; // soma os valores
        echo $soma . '<br/>'; // exibe o resultado
    }

    // chamando a função soma() e passando dois valores como argumentos
    soma(10, 20); // exibe o resultado da soma de 10 + 20

    // exemplo de função com retorno de valores
    function subtracao($a = 0, $b = 0) { // criando uma função chamada 'subtracao' que recebe dois parâmetros
        // caso a função seja chamada sem passar todos ou partes dos argumentos, os valores padrões serão 0
        $subtracao = $a - $b; // subtrai os valores
        return $subtracao; // retorna o resultado
    }

    // chamando a função subtracao() sem passar argumentos
    echo subtracao() . '<br/>'; // exibe o resultado da subtração de 0 - 0

    // chamando a função subtracao() e passando dois valores como argumentos
    $totSubtracao = subtracao(20, 10); // armazena o resultado da subtração de 20 - 10 na variável $totSubtracao
    echo $totSubtracao . '<br/>'; // exibe o resultado armazenado na variável $totSubtracao

    // chamando a função subtracao() e passando um valor como argumento
    echo subtracao(10) . '<br/>'; // exibe o resultado da subtração de 10 - 0
?>