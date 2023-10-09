<?php
session_start();
require 'logica-autenticacao.php';

/** PROTEÇÃO PÁGINA - PERMISSÃO ACESSO **/
if (!autenticado()) {
    $_SESSION["restrito"] = true;
    redireciona();
    die();
}
/** PROTEÇÃO PÁGINA - PERMISSÃO ACESSO **/

$titulo = "Listagem de usuários";
require 'cabecalho.php';
require 'conexao.php';

$sql = "SELECT id, nome, email FROM usuarios ORDER BY nome";
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
} else {
?>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr class="table-dark">
                    <th scope="col" style="width:30%;">ID</th>
                    <th scope="col" style="width:30%;">Nome</th>
                    <th scope="col" style="width:30%;">Email</th>
                    <?php if (autenticado()) { ?>
                        <th scope="col" style="width:10%;" colspan="1"></th>
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
                        <td><?= $row["email"] ?></td>
                        <td class="text-end">
                            <?php
                            if (id_usuario() == $row["id"]) {
                            ?>
                                <a href="excluir-usuario.php?id=<?= $row["id"] ?>" class="btn btn-danger" onclick="if(!confirm('Tem certeza que deseja excluir?')) return false;">
                                    <span data-feather="trash-2"></span>Excluir
                                <?php
                            } else {
                                ?>
                                    <button type="button" class="btn btn-secondary" disabled>
                                        <span data-feather="trash-2"></span>Excluir
                                    </button>
                                <?php
                            }
                                ?>
                        </td>
                    </tr>
                <?php
                }
                ?>

            </tbody>

        </table>

    </div>

<?php
}

if(isset($_SESSION ["result"])){

    if(!$_SESSION ["result"]){
        $erro = $_SESSION ["erro"];
        unset($_SESSION ["erro"]);
        ?>
        <div class="alert alert-danger" role="alert">
            <h4>Falha ao efetuar exclusão.</h4>
            <p><?= $erro ?></p>
        </div>
        <?php
    }
unset($_SESSION ["result"]);
}

require 'rodape.php';
?>