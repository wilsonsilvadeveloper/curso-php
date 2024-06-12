<?php

    /*/
        uma variavel é um espaço na memória do computador que armazena um valor, ao 
        criar uma variavel, estamos reservando um espaço na memória para armazenar um valor para
        posteriomente ser acessado e manipulado.
    */

    echo '<pre>';
    // acessando variáveis já definidas pelo PHP
    print_r($_SERVER);
    echo '</pre>';

    // criando novas variáveis 
    $nome = 'Wilson'; // variavel do tipo string (ou seja, uma seguencia de caracteres)
    echo 'Meu nome é <br/> ', $nome; // acessando a variável

    $idade = 20; // variavel do tipo inteiro (ou seja, um número inteiro)
    echo '<br/> Eu tenho ' .$idade .' anos';

    $bool = true; // variavel do tipo booleano (ou seja, um valor verdadeiro ou falso)
    echo '<br/> A variável $bool é do tipo booleano? ' . $bool;

    $altura = 1.88; // variavel do tipo double (ou seja, um número com casas decimais)
    echo '<br/> eu tenho ' . $altura . ' de altura';

    define('Sobrenome', 'Silva'); // criando uma constante
    // constante é uma variavel que não pode ser alterada
    echo '<br/> Meu sobrenome é ' . Sobrenome; // acessando a constante
?>