<?php
    /*/ 
        sessões é uma forma de armazenar dados do usuário enquanto ele navega pelo site, 
        e esses dados só são destruídos quando o usuário fecha o navegador ou quando a sessão é destruída manualmente.
    */

    session_start(); // inicia a sessão
    $_SESSION['nome'] = 'wilson'; // cria uma variável de sessão
    if(isset($_SESSION['nome'])) // verifica se a sessão existe
        echo 'Olá, '.$_SESSION['nome']; // exibe o valor da variável de sessão
    else{
        echo 'variável de sessão não existe';
    }
    unset($_SESSION['nome']); // remove a variável de sessão
    session_destroy(); // destroi a sessão completamente
    echo '<br/>';
    echo 'sessão destruída';

    // cookies
    setcookie('nome', 'wilson', time() + (60*60*24), '/'); // cria um cookie com o nome 'nome' e o valor 'wilson' que expira em 24 horas e é válido para todo o site unsado o '/' 
    echo '<br/>';
    echo $_COOKIE['nome']; // exibe o valor do cookie
    setcookie('nome', '', time() - (60*60*24), '/'); // remove o cookie
    echo '<br/>';
    if(isset($_COOKIE['nome'])) // verifica se o cookie existe
        echo 'cookie existe';
    else{
        echo 'cookie não existe'; // cokie foi removido
    }
?>