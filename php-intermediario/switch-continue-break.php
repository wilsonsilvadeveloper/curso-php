<?php
    // Switch, continue e break em PHP - Estruturas de controle
    $nome = 'Wilson';
    switch($nome){ // switch é uma estrutura de controle que compara valores
        case 'Wilson':
            echo 'O nome é Wilson <br/>';
            break;
        case 'Wilson Silva':
            echo 'O nome é Wilson Silva <br/>';
            break;
        
    } // usamos o break para sair do switch e não executar os outros cases

    for($i = 0; $i < 10; $i++){
        /*/
        if($i == 5){
            break; // sai do loop
        }
        */
        if ($i == 7){
            continue; // pula a execução do código e vai para a próxima iteração
        }
        echo $i;
        echo '<hr/>';
    } // o continue pula a execução do código e vai para a próxima iteração
?>