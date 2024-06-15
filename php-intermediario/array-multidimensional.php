<?php
    // array single (ou seja, um array comum)
    $arr = array(1, 2, 3, 4, 5); // criando um array
    echo $arr[0] . '<br/>'; // acessando o primeiro elemento do array

    // array multidimensional (ou seja, um array dentro de outro array)
    // formas de criar um array multidimensional

    /*/ forma 1
    $arr2 = array(
        array('wilson', 'gil'),
        array(20, 25)
    );
    */

    /*/ forma 2
    $arr2 = [0][0] = 'wilson';
    $arr2 = [0][1] = 'gil';
    $arr2 = [1][0] = 20;
    $arr2 = [1][1] = 25;
    */

    // forma 3
    $arr2 = [['wilson', 'gil'], [20, 25]];

    echo $arr2[0][0] . '<br/>'; // acessando o primeiro nome do primeiro array
    echo $arr2[1][1] . '<br/>'; // acessando a idade do segundo elemento no segundo array
    echo $arr2[0][1] . '<br/>'; // acessando o segundo nome do primeiro array
    echo $arr2[1][0] . '<br/>'; // acessando a idade do primeiro elemento no segundo array
?>