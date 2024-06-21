<?php
    $nome = 'wilson';
    if($nome == 'wilson'):
        echo 'verdade';
    endif;

    $contador = 0;
    while($contador <= 10):
        echo '<br/>' . $contador;
        $contador++;
    endwhile;

    $array = array(1,2,4,5,6,7,8,9,10);
    foreach($array as $key => $value):
        echo '<br/>' . $key . ' - ' . $value;
    endforeach;

    for($i = 0; $i <= 10; $i++):
        echo '<br/>' . $i;
    endfor;
?>