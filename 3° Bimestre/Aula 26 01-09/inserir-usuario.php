<?php
session_start();
require 'logica-autenticacao.php';

$titulo = "Página de inserção de produtos";
require 'cabecalho.php';

require 'conexao.php';
$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, "senha");

$senha_hash = password_hash($senha, PASSWORD_BCRYPT);

echo "<p><b>nome:</b> $nome</p>";
echo "<p><b>email</b>: $email</p>";
echo "<p><b>senha_hash:</b> $senha_hash</p>";

$sql = "INSERT INTO usuarios(nome, email, senha) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$result = $stmt->execute([$nome, $email, $senha_hash]);

if ($result == true) {
?>
    <div class="alert alert-success" role="alert">
        <h4>Dados gravados com SUCESSO!</h4>
    </div>
<?php
} else {
    $errorArray = $stmt->errorInfo();

?>
    <div class="alert alert-danger" role="alert">
        <h4>FALHA ao efetuar a gravação dos dodos</h4>
        <p><?= $errorArray[2]; ?></p>
    </div>
<?php

}
require 'rodape.php'; ?>