<?php

$titulo_pagina = "Listagem de produtos";
require 'cabecalho.php';

?>
    <div class="table-responsive">
        <table class="table table-striped ">
            <thead class="table-success">
                <tr>
                    <th scope="col" style="width: 10%;">ID</th>
                    <th scope="col" style="width: 25%;">Nome</th>
                    <th scope="col" style="width: 15%;">Imagem</th>
                    <th scope="col" style="width: 25%;">Descrição</th>
                    <th scope="col" style="width: 25%;"colspan="2"></th>
                </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Daily T-Shirt</td>            
                <td>
                    <a target="_blank" href="https://www.insiderstore.com.br/cdn/shop/products/2_f1689000-3338-4bb9-a792-079d6b9e0697.png?v=1685319152&width=990">
                        Link imagem
                    </a>
                </td>
                <td>Além de ser extremamente leve e macia, ideal pra qualquer ocasião e estação do ano, a Daily T-Shirt  tem impacto ambiental reduzido: 50% menos uso de água e 50% menos emissões de CO2 na sua produção que uma camiseta de algodão, livre do uso de inseticidas e pesticidas.</td>
                <td>
                    <a class="btn btn-sm btn-warning" href="#">
                        <span data-feather="edit"></span>
                        Editar
                    </a>
                </td>
                <td>
                    <a class="btn btn-sm btn-danger" href="#">
                        <span data-feather="trash-2"></span>
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
                    <a class="btn btn-sm btn-warning" href="#">
                        <span data-feather="edit"></span>
                        Editar
                    </a>
                </td>
                <td>
                    <a class="btn btn-sm btn-danger" href="#">
                        <span data-feather="trash-2"></span>
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
                    <a class="btn btn-sm btn-warning" href="#">
                        <span data-feather="edit"></span>
                        Editar
                    </a>
                </td>
                <td>
                    <a class="btn btn-sm btn-danger" href="#">
                        <span data-feather="trash-2"></span>
                        Excluir
                    </a>
                </td>
            </tr>
        </tbody>

        </table>
    </div>
<?php

require 'rodape.php';

?>