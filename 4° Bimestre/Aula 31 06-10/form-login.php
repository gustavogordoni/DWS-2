<?php
session_start();
require 'logica-autenticacao.php';

if (autenticado()) {
    redireciona();
    die();
}

$titulo = "";
require 'cabecalho.php';
?>
<div class="row">
    <div class="col-4 offset-4">
        <form action="login.php" method="post">

            <h1 class="h3 mb-3 fw-normal">Por favor identifique-se</h1>

            <div class="form-floating mb-2">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
                <label for="floatingInput">Endereço de e-mail</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Senha" name="senha" required>
                <label for="floatingPassword">Senha</label>
            </div>

            <button class="btn btn-primary w-100 py-2" type="submit">Entrar</button>

        </form>

    </div>
</div>

<div class="row">
    <div class="col-4 offset-4">
        <?php
        if (isset($_SESSION["result_login"])) {
            if ($_SESSION["result_login"]) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Autenticado com sucesso!</h4>
                    </div>
                <?php
            } else {
                $erro = $_SESSION["erro"];
                unset($_SESSION["erro"]);
                ?>
                    <div class="alert alert-danger" role="alert">
                        <h4>Falha ao efetuar a autenticação.</h4>
                        <p><?= $erro ?></p>
                    </div>
                <?php
            }
            unset($_SESSION["result_login"]);
        }
        ?>
    </div>
</div>


<?php require 'rodape.php'; ?>