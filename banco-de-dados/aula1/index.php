<?php
    // Usando PDO para conectar ao banco de dados
    /*/
        o PDO é uma classe nativa do PHP que serve para conectar ao banco de dados,
        por ser nativa, não é necessário instalar nada, basta apenas instanciar a classe
    */

    $pdo = new PDO('mysql:host=localhost;dbname=modulo8', 'root', '');
    // host: onde está o banco de dados, no caso, localhost é o próprio computador local
    // dbname: nome do banco de dados
    // root: usuário do banco de dados
    // '' senha do banco de dados
    
?>