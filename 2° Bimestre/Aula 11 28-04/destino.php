<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Destino</title>
    <link rel="stylesheet" href=".css">
    <script src=".js"></script>
  </head>
  <body>

  <?php
    $n1 = filter_input(INPUT_POST, "n1", FILTER_SANITIZE_SPECIAL_CHARS);
    $n2 = filter_input(INPUT_POST, "n2", FILTER_SANITIZE_SPECIAL_CHARS);
    $n3 = filter_input(INPUT_POST, "n3", FILTER_SANITIZE_SPECIAL_CHARS);

    $media = ($n1 + $n2 + $n3) / 3;
  ?>  

    <div class="container">
        <h1>Praticando - Calculadora média</h1>
        <hr>

      <?php
        echo "<p>Um aluno com as notas <strong>$n1</strong>, <strong>$n2</strong> e <strong>$n3</strong> tem a média igual a <strong>$media</strong></p>
        <br>";

        if ($media < 4 ){
          echo '<p>Com essa média o aluno está <u class="text-danger"><strong>REPROVADO</strong></u></p>';
        }
        elseif($media >= 4 && $media < 6){
          echo '<p>Com essa média o aluno está <u class="text-warning"><strong>DE RECUPERAÇÃO</strong></u> </p>';
        }
        else{
          echo '<p>Com essa média o aluno está <u class="text-success"><strong>APROVADO</strong></u></p>';
        }

      ?>
    </div>
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>