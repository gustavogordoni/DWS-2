<?php
session_start();
require 'logica-autenticacao.php';

if (!autenticado() OR !isAdmin()) {
    $_SESSION["restrito"] = true;
    redireciona();
    die();
}

require 'conexao.php';
$id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);

$sql = "UPDATE categorias SET nome = ? WHERE id = ?";

try{    
    $stmt = $conn->prepare($sql);
    $result = $stmt->execute([$nome, $id]);

}catch(Exception $e){
    $result = false;
    $error = $e -> getMessage();
}

if ($result == true) {
    $_SESSION ["result"] = true;
    $_SESSION ["mensagem_sucesso"] = "Dados alterados com sucesso!";

} else {
    $_SESSION ["result"] = false;
    $_SESSION ["mensagem_erro"] = "Falha ao efetuar alteração.";
    $_SESSION ["erro"] = $error;
}
redireciona("formulario-categorias.php");
?>