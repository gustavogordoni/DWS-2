<?php
session_start();
require 'logica-autenticacao.php';

if(!autenticado()){
    $_SESSION["restrito"] = true;
    redireciona();
    die();
}

$titulo = "Página protegida";
require 'cabecalho.php';

?>
<p class="display-5 text-center">Seja bem-vindo(a) <b><?php nome_usuario() ?> </b> <br></p>

<div class="text-center">
    <p class="display-4 fw-bold">
        Aula de sessões.
    </p>

    <p class="display-4">
        Esta é uma página <span class="bg-danger text-warning">PROTEGIDA</span>
    </p>

    <p class="display-4">
        Só é possível acessá-la, <br> <span class="bg-warning">após ter se autenticado.</span>
    </p>
</div>

<?php
require 'rodape.php';
?>