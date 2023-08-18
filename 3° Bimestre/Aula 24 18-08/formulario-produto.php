<?php
session_start();
$titulo = "Formulário";
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

<form action="inserir-produto.php" method="post">
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label for="urlfoto" class="form-label">URL de uma foto/imagem do produto</label>
                <input type="url" class="form-control" name="urlfoto" required>
                <div class="form-text">Endereço http de uma imagem</div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição detalhada do produto</label>
                <textarea class="form-control" name="descricao" required></textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6 text-center">
            <button type="submit" class="btn btn-primary">Gravar</button>
            <button type="reset" class="btn btn-warning">Cancelar</button>
        </div>
    </div>

</form>

<?php } ?>

<?php require 'rodape.php'; ?>