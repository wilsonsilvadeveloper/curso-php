<?php
    // Delete com PDO
    $pdo = new PDO('mysql:host=localhost;dbname=modulo8', 'root', '');
    $id = 3;
    $sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=?");
    // a condição WHERE é utilizada para deletar um registro específico, sem ela, todos os registros seriam deletados
    if($sql->execute(array($id))){
        echo 'Cliente deletado com sucesso!';
    } else {
        echo 'Erro ao deletar cliente!';
    }
?>