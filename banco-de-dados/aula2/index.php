<?php
    // Como inserir dados no banco de dados através do formulário
    $pdo = new PDO('mysql:host=localhost;dbname=modulo8', 'root', ''); // Conexão com o banco de dados

    date_default_timezone_set('America/Sao_Paulo'); // Configuração de fuso horário
    if(isset($_POST['acao'])){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $momento_registro = date('Y-m-d H:i:s'); // Formato de data e hora

        $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?,?)"); // forma segura de inserir dados no banco de dados
        /*/ o metos prepare() prepara a query para ser executada,
            quando colocamos "?" no lugar de valores, estamos dizendo que esses valores serão passados posteriormente,
            isso é uma forma de prevenir SQL Injection que é uma técnica de invasão de banco de dados, ao passar "?" como parametro
            o PDO irá tratar esses valores e remover qualquer tipo de código malicioso que possa ser passado como parametro.
        */

        /*/ $sql2 = $pdo->prepare("INSERT INTO `clientes` VALUES (null,$nome,$sobrenome, $momento_registro)");
            forma insegura de inserir dados no banco de dados, pois dessa forma,
            qualquer código malicioso que seja passado como parametro será executado no banco de dados
        */
         
        $sql->execute(array($nome, $sobrenome, $momento_registro)); // Executa a query e passa os valores para serem inseridos no banco de dados
        echo 'Cliente inserido com sucesso!';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fomrlario de Clientes</title>
</head>
<body>
    <form method="post">
        <input type="text" name="nome" required>
        <input type="text" name="sobrenome" required>
        <input type="submit" name="acao" value="Enviar">
    </form>
</body>
</html>