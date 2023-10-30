<?php
session_start();
require 'logica-autenticacao.php';

if (!autenticado() OR !isAdmin()) {
    $_SESSION["restrito"] = true;
    redireciona();
    die();
}

require 'conexao.php';
$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, "senha");

$sql = "INSERT INTO categorias(nome) VALUES (?)";

try{    
    $stmt = $conn->prepare($sql);
    $result = $stmt->execute([$nome]);

}catch(Exception $e){
    $result = false;
    $error = $e -> getMessage();
}

if ($result == true) {
    $_SESSION ["result"] = true;
    $_SESSION ["mensagem_sucesso"] = "Dados gravados com sucesso!";

} else {
    $_SESSION ["result"] = false;
    $_SESSION ["mensagem_erro"] = "Falha ao efetuar gravação.";
    $_SESSION ["erro"] = $error;
}
redireciona("formulario-categorias.php");
?>