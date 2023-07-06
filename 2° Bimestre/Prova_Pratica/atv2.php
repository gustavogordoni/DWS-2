<!doctype html>
<html lang="pt-br" data-bs-theme="light">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXh401p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Prova prática</title>
    <link rel="stylesheet" href=".css">
    <script src=".js"></script>
  </head>
  <body>
  <?php
        $cor = filter_input(INPUT_GET, "cor", FILTER_SANITIZE_SPECIAL_CHARS);
        $quant = filter_input(INPUT_GET, "quant", FILTER_SANITIZE_SPECIAL_CHARS);

        $class_red = "text-danger";
        $class_green = "text-success";
        $class_blue = "text-primary";
        $class_lorem = "text-dark";      

      
        if($cor == "blue"){
          $class_blue = "text-light bg-primary";
          $class_lorem= "border border-3 border-primary text-primary bg-primary bg-opacity-25 p-2";
        }
            
        if($cor == "green"){
          $class_green = "text-light bg-success";
          $class_lorem= "border border-3 border-success text-success bg-success  bg-opacity-25 p-2";
        }

        if($cor == "red"){
          $class_red = "text-light bg-danger";
          $class_lorem= "border border-3 border-danger text-danger bg-danger  bg-opacity-25 p-2";
        }
    ?>  

    <div class="container">

    <div class="row">
        <div class="col-10">
            <h1>Exercício 2 - GET - Turma A</h1>
        </div>
        <div class="col-2">
            <a class="fs-2" href="./atv2.php">LIMPAR</a>
        </div>
    </div>
    <hr>

    <h4 class="mt-4"><strong>Perfil de cores (tema)</strong></h4>
    <div class="d-flex justify-content-around">        
        <strong><a class="p-2 fs-1 <?= $class_red ?>" href ="?cor=red&quant=<?=$quant?>">VERMELHO</a></strong>
        <strong><a class="p-2 fs-1 <?= $class_green ?>" href="?cor=green&quant=<?=$quant?>">VERDE</a></strong>
        <strong><a class="p-2 fs-1 <?= $class_blue ?>" href="?cor=blue&quant=<?=$quant?>">AZUL</a></strong>
    </div>

    <h4 class="mt-4"><strong>Número de parágrafos</strong></h4>
    <div class="d-flex justify-content-around mb-5">        
        <strong><a class="p-2 fs-1" href ="?quant=2&cor=<?=$cor?>">#2</a></strong>
        <strong><a class="p-2 fs-1" href="?quant=3&cor=<?=$cor?>">#3</a></strong>
        <strong><a class="p-2 fs-1" href="?quant=6&cor=<?=$cor?>">#6</a></strong>
        <strong><a class="p-2 fs-1" href="?quant=13&cor=<?=$cor?>">#13</a></strong>
        <strong><a class="p-2 fs-1" href="?quant=32&cor=<?=$cor?>">#32</a></strong>
    </div>

    <?php 
        for($i = 1; $i <= $quant; $i++){
           echo '<p class="fs-3 '. $class_lorem .'">Lorem ipsum ' . $i . '</p></span>';
        }
    ?>

      <?php 
        require 'menu.php';
      ?>      

    </div>
        
    </div> 
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>