<?php
session_start();
require 'logica-autenticacao.php';

$titulo = "Início";
require 'cabecalho.php';

echo "<pre>";
var_dump($_SESSION);
echo "</pre>";

?>

<p class="display-4">
    Seja bem vindo a aplicação <strong>"Lojinha"</strong>.
</p>
<p class="display-4">
    Esta é a página inicial.
</p>
<hr>

<?php

if(isset($_SESSION["restrito"]) && $_SESSION["restrito"]){
    ?>
    <div class="alert alert-danger" role="alert">
        <h4>Esta é uma prágina PROTEGIDA!</h4>
        <p>Você está tentando acessar um conteúdo restrito</p>
    </div>

    <?php
    unset($_SESSION["restrito"]);
}

require 'conexao.php';
require 'rodape.php'; ?>