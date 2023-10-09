<?php
session_start();
require 'logica-autenticacao.php';

require 'conexao.php';
$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, "senha");

$sql = "INSERT INTO usuarios(nome, email, senha) VALUES (?, ?, crypt (?, gen_salt('bf', 8) ))";

try{    
    $stmt = $conn->prepare($sql);
    $result = $stmt->execute([$nome, $email, $senha]);

}catch(Exception $e){
    $result = false;
    $error = $e -> getMessage();
}

if ($result == true) {
    $_SESSION ["result"] = true;

} else {
    //TRATAMENTO DE MENSAGENS
    if(stripos($error, "duplicate key") != false){
        $error = "Atenção: o email <b> $email </b> já está registrado. <br><br>" . $error;
    }

    $_SESSION ["result"] = false;
    $_SESSION ["erro"] = $error;
}
redireciona("formulario-usuarios.php");
?>