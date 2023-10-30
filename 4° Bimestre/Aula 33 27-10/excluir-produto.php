<?php
session_start();
require 'logica-autenticacao.php';

/** PROTEÇÃO PÁGINA - PERMISSÃO ACESSO **/
if (!autenticado() OR !isAdmin()) {
    $_SESSION["restrito"] = true;
    redireciona();
    die();
}
/** PROTEÇÃO PÁGINA - PERMISSÃO ACESSO **/

$titulo = "Página de exclusão de produtos";
require 'cabecalho.php';

require 'conexao.php';
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

echo "<p><b>ID:</b> $id</p>";

$sql = "DELETE FROM `produtos` WHERE id = ?";

$stmt = $conn->prepare($sql);

$result = $stmt->execute([$id]);

$cont =  $stmt->rowCount();

if ($result == true && $cont >= 1) {
?>
    <div class="alert alert-success" role="alert">
        <h4>Dados excluido com SUCESSO!</h4>
    </div>
<?php
} elseif ($cont == 0) {
?>
    <div class="alert alert-danger" role="alert">
        <h4>FALHA ao efetuar exclusão</h4>
        <p>Não foi econtrado nenhum registro com o ID = <?= $id ?></p>
    </div>
<?php

} else {
    $errorArray = $stmt->errorInfo();

?>
    <div class="alert alert-danger" role="alert">
        <h4>FALHA ao efetuar a gravação dos dodos</h4>
        <p><?= $errorArray[2]; ?></p>
    </div>
<?php

}
require 'rodape.php'; ?>