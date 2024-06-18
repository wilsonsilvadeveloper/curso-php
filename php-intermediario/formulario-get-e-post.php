<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fomulário</title>
</head>
<body>
    <?php
    // $_GET é uma variável super global do PHP que armazena dados enviados por meio de um formulário com o método GET
    // o metodo GET envia os dados pela URL
    if(isset($_GET['acao'])){ 
        $nome = $_GET['nome']; // pega o valor do input com o name="nome"
        $email = $_GET['email']; // pega o valor do input com o name="email"
        echo $nome;
        echo '<br/>';
        echo $email;
    }
    
    // $_POST é uma variável super global do PHP que armazena dados enviados por meio de um formulário com o método POST
    // o metodo POST envia os dados de forma oculta e mais segura
    if(isset($_POST['acao'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $celular = $_POST['celular'];
        echo $nome;
        echo '<br/>';
        echo $email;
        echo '<br/>';
        echo $idade;
        echo '<br/>';
        print_r($celular);
    }

    ?>
    <form method="post">
        <input type="text" name="nome">
        <input type="text" name="email">
        <select name="idade">
        <?php
            for($i = 0; $i <= 100; $i++){
                echo '<option value="'.$i.'">'.$i.'</option>';
            }
        ?>
        </select>
        <input type="checkbox" name="celular[]" value="iphone">
        <input type="checkbox" name="celular[]" value="xiaomi">
        <input type="checkbox" name="celular[]" value="samsung">
        <input type="checkbox" name="celular[]" value="motorola">
        <input type="submit" name="acao" value="Enviar">
    </form>
</body>
</html>