<?php
    // Como fazer consultas simples e avançadas com PDO
    $pdo = new PDO('mysql:host=localhost;dbname=modulo8', 'root', '');

    /*/ 
    $sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = ?"); Selecionando todos os post de uma categoria
    $sql->execute(array($_GET['categoria_id']));

    $info = $sql->fetchAll();
    echo 'Usando foreach' . '<br><br>';
    foreach ($info as $key => $value){
        echo'Titulo' . $value['titulo'];
        echo '<br>';
        echo 'Noticia ' .$value['conteudo'];
        echo '<hr>';
    }

    echo 'Usando o for' . '<br><br>';
    for($i = 0; $i < count($info); $i++){
        echo 'Titulo' . $info[$i]['titulo'];
        echo '<br>';
        echo 'Noticia' . $info[$i]['conteudo'];
        echo '<hr>';
    }
    */

    /*/
    $sql = $pdo->prepare("SELECT * FROM categorias");
    $sql->execute();
    $info = $sql->fetchAll();

    Exibindo posts de cada categoria
    foreach ($info as $key => $value){
        $categoria_id = $value['id'];
        echo 'Exibindo posts de: ' . $value['nome'];
        echo '<br>';

        $sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = $categoria_id");
        $sql->execute();
        $infoPosts = $sql->fetchAll();
        foreach($infoPosts as $key => $value){
            echo 'Titulo: ' . $value['titulo'];
            echo '<br>';
            echo 'Noticia: ' . $value['conteudo'];
            echo '<hr>';
        }
    }
    */

    // Fazendo consultas com INNER JOIN
    /*/
        INNER JOIN é utilizado para juntar tabelas, por exemplo, se você tem uma tabela de posts e uma tabela de categorias,
        você pode juntar essas tabelas para exibir dados de ambas em uma única consulta.
        
        A palavar "ON" especifica a condição de junção, ou seja, qual coluna de uma tabela deve ser comparada com a coluna de outra tabela.
        */
    $sql = $pdo->prepare("SELECT `posts`.*, `categorias`.*, `posts`.`id` AS `post_id` FROM `posts` INNER JOIN `categorias` ON `posts`.`categoria_id` = `categorias`.`id` "); // INNER JOIN é utilizado para juntar tabelas
    $sql->execute();
    echo '<pre>';
    print_r($sql->fetchAll(PDO::FETCH_ASSOC));
    echo '</pre>';


?>