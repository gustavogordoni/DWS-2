<!doctype html>
<html lang="pt-br" data-bs-theme="light">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Tabuada</title>
    <link rel="stylesheet" href=".css">
    <script src=".js"></script>
  </head>
  <body>
    <div class="container">
    <h1 class="mt-1">Tabuada</h1>
    <hr>

    <form action="destino.php" class="form" method="POST">

    <div class="row mb-3" >
        <label for="n1" class="col-sm-2 col-form-label text-end">Número:</label>
    <div class="col-sm-2">
        <input class="form-control" type="number" name="n1" id="n1">
    </div>
    </div> 

    <button type="submit" class="btn btn-success">Calcular média</button>
    <button type="reset" class="btn btn-warning">Limpar</button>    
    
    </form>    
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>