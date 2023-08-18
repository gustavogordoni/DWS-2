<?php
session_start();

$titulo = "Página de Destino da autenticação";
require 'cabecalho.php';

//require 'conexao.php';

$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS);


echo "<p><b>E-mail:</b> $email</p>";


if ($email == "sla@sla.com" && $senha == "123") {
    //DEU CERTO
    $_SESSION ["email"] = $email;
    $_SESSION ["nome"] = "Gustavo Gordoni";
?>
    <div class="alert alert-success" role="alert">
        <h4>Autenticado com SUCESSO!</h4>
    </div>
<?php
} else {
    //NÂO DEU CERTO
    unset( $_SESSION ["email"]);
    unset( $_SESSION ["nome"]);
?>
    <div class="alert alert-danger" role="alert">
        <h4>FALHA ao efetuar a autenticação</h4>
        <p>Usuário ou senha incorretos</p>
    </div>
<?php
}


require 'rodape.php';
?>