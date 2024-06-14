<?php
    /*/
        Looping é uma estrutura de controle que permite executar um bloco de código
        várias vezes.
    */

    // laço de repetição for
    for($contador = 0; $contador < 10; $contador++){
        echo 'Entramos no laço for <br/>';
        echo $contador. '<br/>';
        echo '<hr/>';
    }


    // laço de repetição while
    $contador = 0;
    while($contador < 10){
        echo 'Entramos no laço while <br/>';
        echo $contador. '<br/>';
        $contador++; // incrementa a variavel $contador em 1
        echo '<hr/>';
    }

    // laço de repetição do-while
    $contador2 = 11;
    do{
        echo 'Entramos no laço do-while <br/>';
        echo $contador2. '<br/>';
        $contador2++; // incrementa a variavel $contador2 em 1
        echo '<hr/>';
    } while($contador2 < 10); /*/
        a diferença entre o do-while e os outros dois loops acima, é que o do-while
        executa a ação pelo menos 1 vez, mesmo que a condição seja falsa. caso seja 
        falsa, ele não executa novamente. 
    */
?>