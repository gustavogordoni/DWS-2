    <?php
    session_start();

    $titulo = "Página protegida";
    require 'cabecalho.php';

    if (!isset($_SESSION["email"])) {
    ?>
        <div class="alert alert-danger" role="alert">
            <h4>Esta é uma prágina PROTEGIDA!</h4>
            <p>Você está tentando acessar um conteúdo restrito</p>
        </div>
    <?php

    } else {
    ?>
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
    }
    ?>

    <?php
    require 'rodape.php';
    ?>