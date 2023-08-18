<?php 
    $titulo = "Página de alteração de produtos";
    require 'cabecalho.php';

    require 'conexao.php';
    $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $urlfoto = filter_input(INPUT_POST, "urlfoto", FILTER_SANITIZE_URL);
    $descricao = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_SPECIAL_CHARS);

    echo "<p><b>ID:</b> $id</p>";
    echo "<p><b>Nome:</b> $nome</p>";
    echo "<p><b>URL da foto</b>: $urlfoto</p>";
    echo "<p><b>Descrição:</b> $descricao</p>";
    
    $sql = "UPDATE produtos SET nome = ?, urlfoto = ?, descricao = ? WHERE id = ?";

    $stmt = $conn -> prepare($sql);
    $result = $stmt -> execute([$nome, $urlfoto, $descricao, $id]);
    $cont =  $stmt -> rowCount();

    if($result == true && $cont >= 1){
        ?>
            <div class="alert alert-success" role="alert">
               <h4>Dados alterados com SUCESSO!</h4>
            </div>
        <?php

    }elseif($result == true && $cont == 0){
        ?>
        <div class="alert alert-secondary" role="alert">
           <h4>Nenhum dado foi alterado</h4>
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
