<?php 
    require 'header.php';
?>

    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Formulário para contato</h1>
    </div>

    <form action="#" method="" class="row g-3">
        <div class="col-md-6">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome">
    </div>
    <div class="col-md-6">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Mensagem</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="d-flex justify-content-center mt-2">
        <button type="submit" class="btn btn-primary me-2">Enviar</button>
        <button type="reset" class="btn btn-warning">Limpar</button>
    </div>

    </form>

<?php 
    require 'footer.php';
?>