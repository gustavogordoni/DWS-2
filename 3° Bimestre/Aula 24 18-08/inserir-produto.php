<?php 
    $titulo = "Página de inserção de produtos";
    require 'cabecalho.php';

    require 'conexao.php';
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $urlfoto = filter_input(INPUT_POST, "urlfoto", FILTER_SANITIZE_URL);
    $descricao = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_SPECIAL_CHARS);
    
    echo "<p><b>Nome:</b> $nome</p>";
    echo "<p><b>URL da foto</b>: $urlfoto</p>";
    echo "<p><b>Descrição:</b> $descricao</p>";
    
    $sql = "INSERT INTO `produtos`(`nome`, `urlfoto`, `descricao`) VALUES (?, ?, ?)";

    $stmt = $conn -> prepare($sql);

    $result = $stmt -> execute([$nome, $urlfoto, $descricao]);

    if($result == true){
        ?>
            <div class="alert alert-success" role="alert">
               <h4>Dados gravados com SUCESSO!</h4>
            </div>
        <?php
    }else{
        $errorArray = $stmt -> errorInfo();

        ?>
            <div class="alert alert-danger" role="alert">
                <h4>FALHA ao efetuar a gravação dos dodos</h4>
                <p><?= $errorArray[2]; ?></p>
            </div>  
        <?php

    }
    require 'rodape.php';?>
