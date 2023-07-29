<?php
    $titulo = "Listagem de produtos";
    require 'cabecalho.php';
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
                <tr>
                    <td>1</td>
                    <td>Camiseta</td>
                    <td><a href="https://cdn.vnda.com.br/bolovo/2021/03/12/17_3_3_323_camisetapretabasicaII.jpg?v=1620159237" target="_blank" rel="noopener noreferrer">Imagem</a></td>
                    <td>Laboris velit sint ad ipsum dolor deserunt quis commodo. Culpa voluptate nostrud cupidatat amet proident ipsum. Est irure ipsum anim eiusmod veniam sint nostrud veniam excepteur dolore. Consequat id cupidatat et aliqua adipisicing aliquip deserunt dolor. Ut exercitation enim consequat nulla aliqua et. Cillum quis minim labore culpa fugiat quis esse tempor ad reprehenderit ipsum.</td>
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

                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
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
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
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
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
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
            </tbody>

        </table>

    </div>

<?php require 'rodape.php';?>