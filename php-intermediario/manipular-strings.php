<?php
    $conteudo = 'lorem ipsum dolor sit amet, consectetur adipiscing elit.';
    echo 'O conteudo da variavel $conteudo é: ' . $conteudo . '<br>';
    echo 'O conteudo da variavel $conteudo recortado é: ' . substr($conteudo, 0,20) . '<br>'; // recorta a string

    $nome = 'Wilson silva';
    $nomes = explode(' ', $nome); // transforma a string em array
    print_r($nomes);
    echo '<br/>' . implode(' ', $nomes); // transforma o array em string com separador(no caso, o espaço) entre os elementos

    $nome2 = '<h1>Wilson Silva</h1>';
    echo '<br/>' . strip_tags($nome2); // remove as tags html da string
    echo '<br/>' . htmlentities($nome2); // mostra as tags html como texto e exibe no navegador
?>