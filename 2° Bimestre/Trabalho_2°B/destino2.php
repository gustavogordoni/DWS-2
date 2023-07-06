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
        
        <?php 
        $inicio = filter_input(INPUT_POST, "inicio", FILTER_SANITIZE_SPECIAL_CHARS);
        $final = filter_input(INPUT_POST, "final", FILTER_SANITIZE_SPECIAL_CHARS);
        $incremento = filter_input(INPUT_POST, "incremento", FILTER_SANITIZE_SPECIAL_CHARS);
        ?>  
        
        <h3>Parâmetros informados: </h3>
        <div class="row bg-body-secondary p-1 my-auto">
            <div class="col-2 ms-2">
            <p>Início: <strong><?= $inicio ?></strong></p>
            </div>

            <div class="col-2">
            <p>Final: <strong><?= $final ?></strong></p>
            </div>

            <div class="col-2">
            <p>Incremento: <strong><?= $incremento ?></strong></p>
            </div>
        </div>

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