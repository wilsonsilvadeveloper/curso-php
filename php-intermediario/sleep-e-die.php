<?php
    sleep(3); // dorme por 3 segundos (ou seja, faz o codigo esperar por 3 segundos pra ser executado)
    echo 'Php carregado com sucesso! <br/>';

   $bool = false;
   if($bool) { // se a variavel $bool for verdadeira
       echo 'Verdadeiro';
   } else { // caso contrario
       die('Falso'); // encerra o script e exibe a mensagem 'Falso'
   }

   /*/
        o die() é uma função que encerra o script e pode ou não exibe uma mensagem, 
        e qualquer código que esteja abaixo do die() não será executado.
   */

   echo 'Ola mundo!'; // essa linha nao sera executada
?>