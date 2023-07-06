<!doctype html>
<html lang="pt-br" data-bs-theme="light">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Prova prática</title>
    <link rel="stylesheet" href=".css">
    <script src=".js"></script>
  </head>
  <body>

    <div class="container">

    <h1>Exercício 1 -POST - Turma A</h1>
    <hr>

    <form action="./destino.php" method="POST">

          <div class="row">
            <div class="col-3">
              <div class="mb-3">
                <label for="n1" class="form-label">Num 1: </label>
                <input type="number" class="form-control" id="n1" name = "n1" require>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-3">
              <div class="mb-3">
                <label for="n2" class="form-label">Num 2: </label>
                <input type="number" class="form-control" id="n2" name = "n2" require>
              </div> 
            </div>
          </div>
          <div class="row">
            <div class="col-3">
              <div class="mb-3">
                <label for="quant" class="form-label">Operação: </label>
                <select class="form-select" aria-label="Default select example" name="option"  require>
                  <option>Selecione a operação</option>
                  <option value="+">Soma (+)</option>
                  <option value="-">Subtração (-)</option>
                  <option value="*">Multiplicação (*)</option>
                  <option value="/">Divisão (/)</option>
                </select>
              </div> 
            </div>
          </div>

          <div class="row">
            <div class="col-1"></div>
            <div class="col">
              <button type="submit" class="btn btn-success">Enviar</button>
              <button type="reset" class="btn btn-warning">Limpar</button>
            </div>
          </div>

    </form>

      <?php 
        require 'menu.php';
      ?>      

    </div>
        
    </div> 
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>