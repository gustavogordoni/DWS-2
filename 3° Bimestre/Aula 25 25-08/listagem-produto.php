<?php
session_start();
require 'logica-autenticacao.php';

$titulo = "Listagem de produtos";
require 'cabecalho.php';

require 'conexao.php';

$sql = "SELECT `id`, `nome`, `urlfoto`, `descricao` FROM `produtos` WHERE 1 ORDER BY nome";
$stmt = $conn->query($sql);

$cont = $stmt->rowCount();

if ($cont == 0) {
?>
    <div class="d-flex text-center cor_tema">
        <div class="d-block my-auto mx-auto">
            <h2 class="mt-2">Não há nenhum usuário cadastrado</h2>
        </div>
    </div>
<?php
    exit;
}
?>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr class="table-dark">
                <th scope="col" style="width:10%;">ID</th>
                <th scope="col" style="width:25%;">Nome</th>
                <th scope="col" style="width:15%;">Imagem</th>
                <th scope="col" style="width:25%;">Descrição</th>
                <?php if (autenticado()) { ?>
                    <th scope="col" style="width:25%;" colspan="2"></th>
                <?php } ?>
            </tr>
        </thead>

        <tbody>

            <?php
            while ($row =  $stmt->fetch()) {
            ?>

                <tr>
                    <td><?= $row["id"] ?></td>
                    <td><?= $row["nome"] ?></td>
                    <td><a href="<?= $row["urlfoto"] ?>" target="_blank" rel="noopener noreferrer">Link da imagem</a></td>
                    <td><?= $row["descricao"] ?></td>

                    <?php if (autenticado()) { ?>
                        <td>
                            <a href="formulario-alterar-produto.php?id=<?= $row["id"] ?>" class="btn btn-warning">
                                <span data-feather="edit"></span>
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href="excluir-produto.php?id=<?= $row["id"] ?>" class="btn btn-danger" onclick="if(!confirm('Tem certeza que deseja excluir?')) return false;">

                                <span data-feather="trash-2"></span>
                                Excluir
                            </a>
                        </td>
                    <?php } ?>

                </tr>
            <?php
            }
            ?>

        </tbody>

    </table>

</div>

<?php require 'rodape.php'; ?>