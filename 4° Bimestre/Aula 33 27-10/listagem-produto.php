<?php
session_start();
require 'logica-autenticacao.php';

$titulo = "Listagem de produtos";
require 'cabecalho.php';

require 'conexao.php';

if (isset($_GET["ordem"]) && !empty($_GET["ordem"])) {
    $ordem = filter_input(INPUT_GET, "ordem", FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $ordem = "nome";
}

if (isset($_POST["busca"]) && !empty($_POST["busca"])) {

    $busca = filter_input(INPUT_POST, "busca", FILTER_SANITIZE_SPECIAL_CHARS);
    $buscaOriginal = $busca;
    $tipo_busca = filter_input(INPUT_POST, "tipo_busca", FILTER_SANITIZE_SPECIAL_CHARS);

    if ($tipo_busca == "id") {

        $sql = "SELECT p.id, p.nome, c.nome AS categoria, p.urlfoto, p.descricao FROM produtos p JOIN categorias c ON c.id = p.id_categoria WHERE p.id = ? ORDER BY p.$ordem";
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute([$busca]);
    } elseif ($tipo_busca == "nome") {

        $sql = "SELECT p.id, p.nome, c.nome AS categoria, p.urlfoto, p.descricao FROM produtos p JOIN categorias c ON c.id = p.id_categoria WHERE p.nome ILIKE ? ORDER BY p.$ordem";

        $busca = '%' . $busca . '%';
        $busca = str_replace(' ', '%', $busca);

        $stmt = $conn->prepare($sql);
        $result = $stmt->execute([$busca]);
    } elseif ($tipo_busca == "descr") {

        $sql = "SELECT p.id, p.nome, c.nome AS categoria, p.urlfoto, p.descricao FROM produtos p JOIN categorias c ON c.id = p.id_categoria WHERE p.descricao ILIKE ? ORDER BY p.$ordem";

        $busca = '%' . $busca . '%';
        $busca = str_replace(' ', '%', $busca);

        $stmt = $conn->prepare($sql);
        $result = $stmt->execute([$busca]);
    } else {

        $sql = "SELECT p.id, p.nome, c.nome AS categoria, p.urlfoto, p.descricao FROM produtos p JOIN categorias c ON c.id = p.id_categoria
            WHERE p.id = ? OR p.nome ILIKE ? OR p.descricao ILIKE ? 
            ORDER BY p.$ordem";

        $buscaInt = intval($busca);
        $busca = '%' . $busca . '%';
        $busca = str_replace(' ', '%', $busca);

        $stmt = $conn->prepare($sql);
        $result = $stmt->execute([$buscaInt, $busca, $busca]);
    }
} else {
    $busca = null;
    $tipo_busca = null;

    $sql = "SELECT p.id, p.nome, c.nome AS categoria, p.urlfoto, p.descricao FROM produtos p JOIN categorias c ON c.id = p.id_categoria ORDER BY p.$ordem";
    $stmt = $conn->query($sql);
}

?>

<div class="row">
    <div class="col">

        <form class="row" role="search" method="POST" action="?ordem=<?= $ordem ?>">

            <label for="tipo_busca" class="fs-5 col-sm-2 col-form-label-sm text-end">
                Buscar por
            </label>
            <div class="col-sm-2">
                <select class="form-select" name="tipo_busca" id="tipo_busca">
                    <option value="" <?php if (empty($tipo_busca)) {
                                            echo " selected";
                                        } ?>>Todos os campos</option>
                    <option value="id" <?php if ($tipo_busca == "id") {
                                            echo " selected";
                                        } ?>>ID</option>
                    <option value="nome" <?php if ($tipo_busca == "nome") {
                                                echo " selected";
                                            } ?>>Nome</option>
                    <option value="descr" <?php if ($tipo_busca == "descr") {
                                                echo " selected";
                                            } ?>>Descrição</option>
                </select>

            </div>
            <div class="col-sm-6">
                <input class="form-control me-2" type="search" name="busca" id="busca" placeholder="Search" aria-label="Search">
            </div>
            <div class="col-sm-2">
                <button class="btn btn-primary" type="submit">
                    <i data-feather="search"></i>
                    Pesquisar
                </button>
            </div>
        </form>
    </div>
</div>

<?php
if (!empty($busca)) {
?>
    <div class="row">
        <div class="col">
            <div class="alert alert-light mb-0 fs-4" role="alert">
                Você está buscando por "<mark class="fst-italic"><?= $buscaOriginal ?></mark>", <a href="?ordem=<?= $ordem ?>"> limpar</a>
            </div>
        </div>
    </div>
<?php
}
?>

<hr>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr class="table-dark">
                <?php
                if ($ordem == "nome") {
                ?>
                    <th scope="col" style="width:10%;">
                        <a href="?ordem=id">ID</a>
                    </th>
                    <th scope="col" style="width:25%;">
                        Nome <i data-feather="chevron-down"></i>
                    </th>
                <?php
                } else {
                ?>
                    <th scope="col" style="width:10%;">
                        ID <i data-feather="chevron-down"></i>
                    </th>
                    <th scope="col" style="width:25%;">
                        <a href="?ordem=nome">Nome</a>
                    </th>
                <?php
                }
                ?>

                <th scope="col" style="width:10%;">Categoria</th>
                <th scope="col" style="width:15%;">Imagem</th>
                <th scope="col" style="width:20%;">Descrição</th>
                <?php if (autenticado() && isAdmin()) { ?>
                    <th scope="col" style="width:20%;" colspan="2"></th>
                <?php
                }
                if (autenticado()) { ?>
                    <th scope="col" style="width:20%;"></th>
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
                    <td><?= $row["categoria"] ?></td>
                    <td><a href="<?= $row["urlfoto"] ?>" target="_blank" rel="noopener noreferrer">Link da imagem</a></td>
                    <td><?= $row["descricao"] ?></td>

                    <?php if (autenticado()) { ?>
                        <td>
                            <a href="formulario-alterar-produto.php?id=<?= $row["id"] ?>" class="btn btn-warning">
                                <span data-feather="edit"></span>
                                Editar
                            </a>
                        </td>

                        <?php
                        if (isAdmin()) { ?>
                            <td>
                                <a href="excluir-produto.php?id=<?= $row["id"] ?>" class="btn btn-danger" onclick="if(!confirm('Tem certeza que deseja excluir?')) return false;">
                                    <span data-feather="trash-2"></span>
                                    Excluir
                                </a>
                            </td>
                    <?php
                        }
                    } ?>

                </tr>
            <?php
            }
            ?>

        </tbody>

    </table>

</div>

<?php require 'rodape.php'; ?>