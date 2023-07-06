<!doctype html>
<html lang="pt-br" data-bs-theme="light">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Exercício 2 - Contador aprimorado</title>
    <link rel="stylesheet" href=".css">
    <script src=".js"></script>
  </head>
  <body>
    <div class="container">
        <h1>Exercício 2 - Contador aprimorado</h1>
        <hr>

        <form action="destino2.php" class="form" method="POST">

    <div>

    <div class="row mb-3 justify-content-center">

      <label for="inicio" class="col-sm-2 col-form-label text-end">Início:</label>
        <div class="col-sm-2">
          <input class="form-control" type="number" name="inicio" id="inicio">
        </div>

        <label for="final" class="col-sm-2 col-form-label text-end">Final:</label>
        <div class="col-sm-2">
          <input class="form-control" type="number" name="final" id="final">
        </div>  

        <label for="incremento" class="col-sm-2 col-form-label text-end">Incremento:</label>
        <div class="col-sm-2">
          <input class="form-control" type="number" name="incremento" id="incremento">
        </div>
    </div>    

    <div class="d-flex justify-content-center mt-4">
        <button type="submit" class="btn btn-success me-4">Calcular média</button>
        <button type="reset" class="btn btn-warning">Limpar</button>
    </div>

    </div>    
    </form>

    <hr>
    <h2>Menu de exercícios</h2>
    <ul>
        <li> <a href="1_NumMaior.php">Exercício 1</a></li>
        <li> <a href="2_Contador.php">Exercício 2</a></li>
        <li> <a href="3_Par&Ímpar.php">Exercício 3</a></li>
        <li> <a href="4_NumPrimos.php">Exercício 4</a></li>
    </ul>
    </div>
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>