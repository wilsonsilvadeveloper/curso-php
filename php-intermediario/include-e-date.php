<?php
    // trabalhando com datas
    date_default_timezone_set('America/Sao_Paulo'); // define o fuso horário padrão
    $data = date('d/m/Y H:i:s', time()+(60*10)); // pega a data atual e soma 10 minutos
    echo $data . '<br/>'; // exibe a data atual + 10 minutos

    include('../php-basico/print.php');
?>