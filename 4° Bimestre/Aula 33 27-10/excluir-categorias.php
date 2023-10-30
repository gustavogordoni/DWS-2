<?php
session_start();
require 'logica-autenticacao.php';

/** PROTEÇÃO PÁGINA - PERMISSÃO ACESSO **/
if (!autenticado() OR !isAdmin()) {
    $_SESSION["restrito"] = true;
    redireciona();
    die();
}
/** PROTEÇÃO PÁGINA - PERMISSÃO ACESSO **/

require 'conexao.php';
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

$sql = "DELETE FROM categorias WHERE id = ?";

try {
    $stmt = $conn->prepare($sql);
    $result = $stmt->execute([$id]);
} catch (Exception $e) {
    $result = false;
    $error = $e->getMessage();
}

$cont = $stmt->rowCount();

if ($result == true && $cont >= 1) {
    $_SESSION["result"] = true;
    $_SESSION["mensagem_sucesso"] = "Registro excluído com sucesso!";
} else {
    //TRATAMENTO DE MENSAGENS
    if (stripos($error, "fk_produtos_categoria") != false) {
        $error = "Atenção: não é possível excluir esta categoria pois há produtos que a utilizam.";
    }

    $_SESSION["result"] = false;
    $_SESSION["mensagem_erro"] = "Falha ao efetuar exclusão.";
    $_SESSION["erro"] = $error;
}
redireciona("formulario-categorias.php");
