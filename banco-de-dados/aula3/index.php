<?php
    // Update e Condições nas queries
    $pdo = new PDO('mysql:host=localhost;dbname=modulo8', 'root', ''); 
    $id = 3;
    $sql = $pdo->prepare("UPDATE `clientes` SET nome='Wilson da conceição', sobrenome='da silva' WHERE id=$id");
    // a condição WHERE é utilizada para atualizar um registro específico
    if($sql->execute()){
        echo 'Cliente atualizado com sucesso!';
    }
?>