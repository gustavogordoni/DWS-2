<?php
session_start();
require 'logica-autenticacao.php';

require 'conexao.php';

$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS);

$sql = "SELECT id, nome, senha FROM usuarios WHERE email = ?"; 
$stmt = $conn -> prepare($sql);
$stmt -> execute([$email]);
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

    $_SESSION["result_login"] = false;
    $_SESSION["error"] = "Usuário ou senha incorretos.";
}
redireciona("form-login.php");
?>