<?php
    session_start();
    //precisamos vincular o chamado aberto ao usuario que está na session 

    //montagem do texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    //abrindo o arquivo
    $arquivo = fopen('arquivo.hd', 'a'); //abrir um arquivo de texto

    //escrevendo o texto
    fwrite($arquivo, $texto);

    //fechando o arquivo
    fclose($arquivo);

    header('Location: abrir_chamado.php');
?>