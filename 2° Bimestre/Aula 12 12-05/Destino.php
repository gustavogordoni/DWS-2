<!doctype html>
<html lang="pt-br" data-bs-theme="light">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title></title>
    <link rel="stylesheet" href=".css">
    <script src=".js"></script>
  </head>
  <body>
        <?php 
        $n = filter_input(INPUT_POST, "n1", FILTER_SANITIZE_SPECIAL_CHARS);
        ?>     
    
        <div class="container">
        
        <h1 class="mt-1">Tabuada</h1>
        <hr>

        <h3>Número escolhido foi: <?=$n?></h2>

        <br>

        <div class="text-center">
        <?php
            for ($cont = 1; $cont <= 10; $cont++) {  
              echo "<p>" . $n . " X " . $cont . " = " . $n * $cont . "</p>";                 
          }
        ?>
        </div>

        <a href="Prat1.php" class="btn btn-link">Voltar</a>
        
        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>