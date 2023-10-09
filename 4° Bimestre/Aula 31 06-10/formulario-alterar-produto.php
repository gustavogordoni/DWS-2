<?php
session_start();
require 'logica-autenticacao.php';

$titulo = "Formulário de alteração de produtos";
require 'cabecalho.php';

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

if (empty($id)) {
?>
    <div class="alert alert-danger" role="alert">
        <h4>FALHA ao abrir formulário para edição</h4>
        <p>ID do produto está vazio</p>
    </div>
<?php
    exit;
}

require 'conexao.php';

$sql = "SELECT nome, urlfoto, descricao FROM produtos WHERE id = ?";

$stmt = $conn->prepare($sql);
$result = $stmt->execute([$id]);

$rowProduto = $stmt->fetch();


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
<form action="alterar-produto.php" method="POST">

    <input type="hidden" name="id" id="id" value="<?= $id ?>">
    <div class="row">
        <div class="col-8">

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" value="<?= $rowProduto['nome'] ?>" required>
            </div>


            <div class="mb-3">
                <label for="urlfoto" class="form-label">URL de uma foto/imagem do produto</label>
                <input type="url" class="form-control" name="urlfoto" value="<?= $rowProduto['urlfoto'] ?>" required onkeypress="imagePreview(this.value)" onchange="imagePreview(this.value)">
                <div class="form-text">Endereço http de uma imagem</div>
            </div>


            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição detalhada do produto</label>
                <textarea class="form-control" name="descricao" required><?= $rowProduto['descricao'] ?></textarea>
            </div>


            <div class="col-6 text-center">
                <button type="submit" class="btn btn-primary">Gravar</button>
                <button type="reset" class="btn btn-warning">Cancelar</button>
            </div>
        </div>

        <div class="col-4 my-auto mx-auto">
            <img src="<?= $rowProduto['urlfoto'] ?>" alt="<?= $rowProduto['nome'] ?>" class="img-thumbnail" id="image-preview">
        </div>

    </div>
    </div>

</form>

<?php require 'rodape.php'; ?>