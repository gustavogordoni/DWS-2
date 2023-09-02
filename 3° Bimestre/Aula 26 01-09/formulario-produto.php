<?php
session_start();
require 'logica-autenticacao.php';

if (!autenticado()) {
    $_SESSION["restrito"] = true;
    redireciona();
    die();
}

$titulo = "Formulário";
require 'cabecalho.php';
?>

<script>
    function imagePreview(valor) {
        var img = document.getElementById('image-preview');
        if (valor) {
            img.setAttribute('src', valor);
            img.style.display = 'inline';
        } else {
            img.style.display = 'none';
        }
    }
</script>

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
                <input type="url" class="form-control" name="urlfoto" required aria-describedby="urlfotoHelp" onchange="imagePreview(this.value)">
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

    <div class="col-4 my-auto mx-auto">
        <img src="" alt="-" class="img-thumbnail" id="image-preview" style="display: none;">
    </div>

</form>

<?php require 'rodape.php'; ?>