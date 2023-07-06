<!doctype html>
<html lang="pt-br" data-bs-theme="light">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Praticando 2 - Criar quadrados</title>
    <link rel="stylesheet" href=".css">
    <script src=".js"></script>
  </head>
  <body>

    <?php
    $n = filter_input(INPUT_GET, "n", FILTER_SANITIZE_SPECIAL_CHARS);      
    ?>

    <div class="container">
      <h1>Praticando 2 - Criar quadrados</h1>
      <hr>

      <div class="d-flex justify-content-around">
        <a href="Prat2.php?n=1" class = "btn btn-link text-link fs-1">1</a>
        <a href="Prat2.php?n=2" class = "btn btn-link text-link fs-1">2</a>
        <a href="Prat2.php?n=4" class = "btn btn-link text-link fs-1">4</a>
        <a href="Prat2.php?n=8" class = "btn btn-link text-link fs-1">8</a>
        <a href="Prat2.php?n=16" class = "btn btn-link text-link fs-1">16</a>
        <a href="Prat2.php?n=32" class = "btn btn-link text-link fs-1">32</a>    
      </div>

      <style>
        .quadrado{
          width: 8vh;
          height: 8vh;
        }
      </style>

      <div class="d-flex flex-wrap mt-3 mx-auto">
      <?php
        for ($cont = 1; $cont <= $n; $cont++){
        echo '<div class = "d-flex justify-content-center align-items-center bg-success quadrado m-2 fs-3 text-light">'. $cont . '</div>';
      }
               
      ?>
      </div>  
      
      <?php
        if(!empty($n)){
          
          echo '<a href="Prat2.php" class = "d-block fs-4 mt-3">Limpar</a>';
        }
      ?>  
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>