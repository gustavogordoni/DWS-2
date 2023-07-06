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

    <h1>Exercício 1 - POST - Turma A</h1>
    <hr>

    <?php 
        $n1 = filter_input(INPUT_POST, "n1", FILTER_SANITIZE_SPECIAL_CHARS);
        $n2 = filter_input(INPUT_POST, "n2", FILTER_SANITIZE_SPECIAL_CHARS);
        $option = filter_input(INPUT_POST, "option", FILTER_SANITIZE_SPECIAL_CHARS);
        
        if($option == "+"){
            $resposta = $n1 + $n2;
        }
        elseif($option == "-"){
            $resposta = $n1 - $n2;
        }
        elseif($option == "*"){
            $resposta = $n1 * $n2;
        }
        elseif($option == "/"){
            $resposta = $n1 / $n2;
        }

        if($resposta > 0){
            $inteiro = "POSITIVO";
            $cor = "text-success";
        }
        elseif($resposta < 0){
            $inteiro = "NEGATIVO";
            $cor = "text-danger";
        }

        echo '<p class="fs-3">O resultado da expresão <span class = "text-info">'. $n1 . $option . $n2 .'</span> é <strong>'. $resposta . '</strong></p>';
        echo '<p class="fs-3"><strong>'. $resposta . '</strong> é <span class = "'. $cor . '">' . $inteiro .'</span></p>';

    ?>

    <?php 
        require 'menu.php';
    ?>

    </div> 
       
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>