<?php
    $titulo = "Listagem de produtos";
    require 'cabecalho.php';

    require 'conexao.php';

    $sql = "SELECT `id`, `nome`, `urlfoto`, `descricao` FROM `produtos` WHERE 1 ORDER BY nome"; 
    $stmt = $conn -> query($sql);
?>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr class="table-info">
                    <th scope="col" style="width:10%;">ID</th>
                    <th scope="col" style="width:25%;">Nome</th>
                    <th scope="col" style="width:15%;">Imagem</th>
                    <th scope="col" style="width:25%;">Descrição</th>
                    <th scope="col" style="width:25%;" colspan = "2"></th>
                </tr>
            </thead>

            <tbody>

                <?php 
                    while($row =  $stmt -> fetch()){                    
                ?>

                <tr>
                    <td><?= $row["id"] ?></td>
                    <td><?= $row["nome"] ?></td>
                    <td><a href="<?= $row["urlfoto"] ?>" target="_blank" rel="noopener noreferrer">Link da imagem</a></td>
                    <td><?= $row["descricao"] ?></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-warning">
                            <span data-feather = "edit"></span>
                            Editar
                        </a>
                    </td>
                    <td>
                        <a href="#" class="btn btn-sm btn-danger">
                            <span data-feather = "trash-2"></span>
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

<?php require 'rodape.php';?>