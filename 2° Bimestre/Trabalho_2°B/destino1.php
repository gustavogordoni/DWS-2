<!doctype html>
<html lang="pt-br" data-bs-theme="light">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Exercício 1 - Número maior (ordenação)</title>
    <link rel="stylesheet" href=".css">
    <script src=".js"></script>
  </head>
  <body>
    <div class="container">
        <h1>Exercício 1 - Número maior (ordenação)</h1>
        <hr>
        
        <?php 
        $n1 = filter_input(INPUT_POST, "n1", FILTER_SANITIZE_SPECIAL_CHARS);
        $n2 = filter_input(INPUT_POST, "n2", FILTER_SANITIZE_SPECIAL_CHARS);
        $n3 = filter_input(INPUT_POST, "n3", FILTER_SANITIZE_SPECIAL_CHARS);
        
        // 3 - 2 - 1
        if($n1 < $n2){
          if($n2 < $n3){
            $res = $n3 . ", " . $n2 . " e " . $n1;
          }
          elseif($n3 < $n2){
            $res = $n2 . ", " . $n3 . " e " . $n1;
          }
        }

        elseif($n2 < $n1){
          if($n1 < $n3){
            $res = $n3 . ", " . $n1 . " e " . $n2;
          }
          elseif($n3 < $n1){
            $res = $n1 . ", " . $n3 . " e " . $n2;
          }
        }

        elseif($n3 < $n2){
          if($n2 < $n1){
            $res = $n1 . ", " . $n2 . " e " . $n3;
          }
          elseif($n1 < $n2){
            $res = $n2 . ", " . $n1 . " e " . $n3;
          }
        }

        elseif(($n1 == $n2) && ($n2 == $n3)){
          $res = "Os três números são iguais";
        }

        echo "<h2>" . $res . "</h2>";
        ?>

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