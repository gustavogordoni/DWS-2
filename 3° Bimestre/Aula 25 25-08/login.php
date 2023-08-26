<?php
session_start();
require 'logica-autenticacao.php';

$titulo = "Página de Destino da autenticação";
require 'cabecalho.php';

require 'conexao.php';

$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS);

echo "<p><b>E-mail:</b> $email</p>";

$sql = "SELECT nome, senha FROM usuarios WHERE email = ?"; 
$stmt = $conn -> prepare($sql);
$stmt -> execute([$email]);
$row = $stmt -> fetch();


if (password_verify($senha, $row['senha'])) {
    //DEU CERTO
    $_SESSION["email"] = $email;
    $_SESSION["nome"] = $row['nome'];
?>
    <div class="alert alert-success" role="alert">
        <h4>Autenticado com SUCESSO!</h4>
    </div>
<?php
} else {
    //NÂO DEU CERTO
    unset($_SESSION["email"]);
    unset($_SESSION["nome"]);
?>
    <div class="alert alert-danger" role="alert">
        <h4>FALHA ao efetuar a autenticação</h4>
        <p>Usuário ou senha incorretos</p>
    </div>
<?php
}


require 'rodape.php';
?>