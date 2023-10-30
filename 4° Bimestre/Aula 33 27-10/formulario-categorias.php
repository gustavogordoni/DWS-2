<?php
session_start();
require 'logica-autenticacao.php';

if (!autenticado() OR !isAdmin()) {
    $_SESSION["restrito"] = true;
    redireciona();
    die();
}

require 'conexao.php';

if (isset($_GET["id"])) {
    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

    $sql = "SELECT nome FROM categorias WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);

    $rowCategoria =  $stmt->fetch();
    $nome = $rowCategoria["nome"];
    $action = "alterar-categoria.php";
} else {
    $id = null;
    $nome = null;
    $action = "inserir-categoria.php";
}

$sql = "SELECT id, nome FROM categorias ORDER BY nome";
$stmt = $conn->query($sql);

$titulo = "Formulário de cadastro de categorias";
require 'cabecalho.php';
?>
<form action="<?= $action ?>" method="post" class="mb-3">
    <input type="hidden" name="id" value="<?= $id ?>">
    <div class="row">
        <div class="col-8">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" value="<?= $nome ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Gravar</button>
            <button type="reset" class="btn btn-warning">Cancelar</button>
        </div>
    </div>
</form>

<?php
if (isset($_SESSION["result"])) {
    if ($_SESSION["result"]) {
?>
        <div class="row">
            <div class="col-8">
                <div class="alert alert-success" role="alert">
                    <h4><?= $_SESSION["mensagem_sucesso"] ?></h4>
                </div>
            </div>
        </div>
    <?php
        unset($_SESSION["mensagem_sucesso"]);
    } else {
    ?>
        <div class="alert alert-danger" role="alert">
            <h4><?= $_SESSION["mensagem_erro"] ?></h4>
            <p><?= $_SESSION["erro"] ?></p>
        </div>
<?php
        unset($_SESSION["erro"]);
        unset($_SESSION["mensagem_erro"]);
    }
    unset($_SESSION["result"]);
}
?>

<div class="row">
    <div class="col-8">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr class="table-dark">
                        <th scope="col" style="width:10%;">ID</th>
                        <th scope="col" style="width:60%;">Nome</th>
                        <th scope="col" style="width:30%;" colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    while ($row =  $stmt->fetch()) {
                    ?>
                        <tr>
                            <td><?= $row["id"] ?></td>
                            <td><?= $row["nome"] ?></td>
                            <td class="text-center">
                                <a href="formulario-categorias.php?id=<?= $row["id"] ?>" class="btn btn-sm btn-warning">
                                    <span data-feather="edit"></span>
                                    Editar
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="excluir-categorias.php?id=<?= $row["id"] ?>" class="btn btn-sm btn-danger" onclick="if(!confirm('Tem certeza que deseja excluir?')) return false;">
                                    <span data-feather="trash-2"></span>
                                    Excluir
                                </a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>

            </table>

        </div>
    </div>
</div>

<?php
require 'rodape.php';
?>