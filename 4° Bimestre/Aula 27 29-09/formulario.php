<?php

$titulo_pagina = "Formulário de cadastro de produtos";
require 'cabecalho.php';

?>
    <form action="" method="POST">
        <div class="row">
            <div class="col-8">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="mb-3">
                    <label for="urlfoto" class="form-label">URL de uma foto/imagem do produto</label>
                    <input type="url" class="form-control" id="urlfoto" name="urlfoto" aria-describedby="urlfotoHelp" required>
                    <div id="urlfotoHelp" class="form-text">Endereço de http de uma imagem da internet</div>
                </div>
                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição detalhada do produto:</label>
                    <textarea class="form-control" name="descricao" id="descricao"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Gravar</button>
                <button type="reset" class="btn btn-warning">Cancelar</ </div>
            </div>
    </form>
<?php

require 'rodape.php';

?>