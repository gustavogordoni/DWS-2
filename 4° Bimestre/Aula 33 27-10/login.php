<?php
session_start();
require 'logica-autenticacao.php';

require 'conexao.php';

$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS);

$sql = "SELECT id, nome, senha FROM administradores WHERE email = ?"; 

try{    
    $stmt = $conn -> prepare($sql);
    $result = $stmt -> execute([$email]);
    $_SESSION["tipoUser"] = "admin";
}catch(Exception $e){
    $result = false;
    $error = $e -> getMessage();
}

$cont = $stmt -> rowCount();

if($cont == 0){
    $sql = "SELECT id, nome, senha FROM usuarios WHERE email = ?"; 

    try{    
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> execute([$email]);
        $_SESSION["tipoUser"] = "usuario";
    }catch(Exception $e){
        $result = false;
        $error = $e -> getMessage();
    }
}

$row = $stmt -> fetch();

if (password_verify($senha, $row['senha'])) {
    //DEU CERTO
    $_SESSION["email"] = $email;
    $_SESSION["nome"] = $row['nome'];
    $_SESSION["idUsuario"] = $row['id'];

    $_SESSION["result_login"] = true;
} else {
    //NÂO DEU CERTO
    unset($_SESSION["email"]);
    unset($_SESSION["nome"]);
    unset($_SESSION["tipoUser"]);

    $_SESSION["result_login"] = false;
    $_SESSION["erro"] = "Usuário ou senha incorretos.";
}
redireciona("form-login.php");
?>