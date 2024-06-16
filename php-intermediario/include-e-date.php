<?php
    // trabalhando com datas
    date_default_timezone_set('America/Sao_Paulo'); // define o fuso horário padrão
    $data = date('d/m/Y H:i:s', time()+(60*10)); // pega a data atual e soma 10 minutos
    echo $data . '<br/>'; // exibe a data atual + 10 minutos


    /*/
        o include() é uma função que inclui e executa o código de um arquivo externo.
    */
    include('../php-basico/print.php'); // inclui o arquivo 'print.php' que está na pasta 'php-basico'
?>