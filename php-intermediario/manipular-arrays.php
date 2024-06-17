<?php
    $arr1 = array(1,2,3,4,5);
    $arr2 = array(6,7,8,9,10,1,4);
    $result = array_merge($arr1, $arr2); // junta os arrays
    print_r($result); // exibe o resultado na tela
    echo '<hr/>';
    print_r(array_intersect($arr1, $arr2)); // exibe os elementos que estão presentes nos dois arrays
    echo '<hr/>';

    $arr3 = ['<h1>wilson</h1>', 'joao', '<p>gil</p>', 'maria'];
    // array_map aplica uma função em todos os elementos do array
    print_r(array_map(('strip_tags'), $arr3)); // remove as tags html das strings