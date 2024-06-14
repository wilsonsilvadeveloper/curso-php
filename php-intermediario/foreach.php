<?php
   $arr = array('wilson', 'felipe', 'mario', 'manu', 'gil');

   echo 'entramos no foreach para percorrer o array <br/>';
   foreach($arr as $key => $value){
        echo $key . ' - ' . $value . '<br>';
        echo '<hr/>';
   }

   $total = count($arr); // a função (count) pega total de elementos do array
   echo 'Entramos no lop for para percorrer o array <br/>';
   for($i = 0; $i < $total; $i++){
        echo $arr[$i] . '<br>';
        echo '<hr/>';
   }

   $contador = 0;
   $total = count($arr); // a função (count) pega total de elementos do array;
   echo 'Entramos no while para percorrer o array <br/>';
   while($contador < $total){
        echo $arr[$contador] . '<br>';
        $contador++; // incrementa a variavel $contador em 1
        echo '<hr/>';
   }

   /*/
        essas são as principais formas de percorrer um array e manipular cada elementes,
        sendo o for e o while formas manuais de percorrer o array, e o foreach uma função propria para
        percorrer arrays.
   */
?>