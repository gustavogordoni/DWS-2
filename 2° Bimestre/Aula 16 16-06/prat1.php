<!doctype html>
<html lang="pt-br" data-bs-theme="light">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Praticando 1</title>
    <link rel="stylesheet" href=".css">
    <script src=".js"></script>
  </head>
  <body>
    <?php
        $cor = filter_input(INPUT_POST, "cor", FILTER_SANITIZE_SPECIAL_CHARS);

        if(!isset ($cor)){
            $class_red = "text-danger";
            $class_green = "text-success";
            $class_blue = "text-primary";
        }

        else{

            if($cor == "blue"){
                $class_blue = "text-light bg-primary";
                echo "azul";
            }
            
            if($cor == "green"){
                $class_green = "text-light bg-success";
                
            }

            if($cor == "red"){
                $class_red = "text-light bg-danger";
                
            }
        }
        
    ?>

  <div class="container">
    <h1>Praticando 1</h1>
    <hr>

    <div class="d-flex justify-content-around">
        
            <a class="p-2 fs-1 <?= $class_red ?>" href = "?cor=red">VERMELHO</a>
        
            <a class="p-2 fs-1 <?= $class_green ?>" href="?cor=green">VERDE</a>
        
            <a class="p-2 fs-1 <?= $class_blue ?>" href="?cor=blue">AZUL</a>        
    </div>

    <?php 

    echo $class_red;
    echo $class_green;
    echo  $class_blue;

    ?>

  </div>
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>