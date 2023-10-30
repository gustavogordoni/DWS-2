<?php
session_start();
require 'logica-autenticacao.php';

/** PROTEÇÃO PÁGINA - PERMISSÃO ACESSO **/
if (!autenticado()) {
    $_SESSION["restrito"] = true;
    redireciona();
    die();
}
/** PROTEÇÃO PÁGINA - PERMISSÃO ACESSO **/

require 'conexao.php';
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

if(id_usuario() != $id && !isAdmin()){
    $_SESSION ["result"] = false;
    $_SESSION ["erro"] = "Operação não permitida";
    redireciona("listagem-usuario.php");
    die();
}

$sql = "DELETE FROM usuarios WHERE id = ?";

try{    
    $stmt = $conn->prepare($sql);
    $result = $stmt->execute([$id]);

}catch(Exception $e){
    $result = false;
    $error = $e -> getMessage();
}

$cont = $stmt -> rowCount();

if ($result == true && $cont >= 1) {

    if(isAdmin()){
        redireciona("listagem-usuario.php");
    }else{
        redireciona("sair.php");
    }    
    die();

} elseif ($cont == 0) {
    
    $_SESSION ["result"] = false;
    $_SESSION ["erro"] = "Não foi econtrado nenhum usuário com o ID = " .  $id;
    redireciona("listagem-usuario.php");
    die();

} else {
    $_SESSION ["result"] = false;
    $_SESSION ["erro"] = $error;
    redireciona("listagem-usuario.php");
    die();
}
?>