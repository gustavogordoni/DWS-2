<!doctype html>

<html lang="pt-br" data-bs-theme="light">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Praticando 2</title>
    <link rel="stylesheet" href=".css">
    
  </head>
  <body>
    <?php
      $animal = filter_input(INPUT_GET, "animal", FILTER_SANITIZE_SPECIAL_CHARS);

      $src = "";

      if($animal != ""){

      echo '<div class="container">';
      echo '<h1>Praticando - Animais</h1>
      <hr>';


      if($animal == "cachorro"){
        
        echo "<p>Você clicou no <strong>Cachorro</strong></p>";
        echo '<p>O cão, no Brasil também chamado de cachorro, é um mamífero carnívoro da família dos canídeos</p>';
        $src = "https://tudodebicho.vteximg.com.br/arquivos/border-collie-deitado.jpg";
   
      }
      elseif($animal == "gato"){

        echo "<p>Você clicou no <strong>Gato</strong></p>";
        echo '<p>O gato ou gato doméstico é um mamífero carnívoro da família dos felídeos, muito popular como animal de estimação</p>';
        $src = "https://static.wixstatic.com/media/ec604f_d4b483ef20aa438188bdbc08e17954b6~mv2.jpg/v1/fill/w_640,h_426,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/ec604f_d4b483ef20aa438188bdbc08e17954b6~mv2.jpg";
    
      }
      elseif($animal == "furao"){

        echo "<p>Você clicou no <strong>Furão</strong></p>";
        echo '<p>O furão é um mamífero carnívoro da família dos Mustelídeos</p>'; $src = "https://blog-static.petlove.com.br/wp-content/uploads/2020/10/ferret-furao-petlove.jpg";
        
      }
      elseif($animal == "cacatua"){

        echo "<p>Você clicou na <strong>Cacatua</strong></p>";
        echo '<p>As cacatuas são psitacídeos grandes, dotadas de um penacho que é erguido em exibições de corte</p>';
         $src = "https://guiaanimal.net/uploads/content/image/5726/AdobeStock_249892550.jpeg";

      }

      echo "<img class='img-fluid img2 img-thumbnail' src='$src'>";
      echo '<br><a href="Animais.php" class="ms-4">Voltar</a>';
      echo '</div>';

      }
      else{

      echo '<div class="container">';
      echo '<h1>Praticando - Animais</h1>
      <hr>';

      echo '<div class="d-flex justify-content-evenly">';

      echo '<a href="Animais.php?animal=cachorro">';
      echo '<img class="img-thumbnail img1" src="https://tudodebicho.vteximg.com.br/arquivos/border-collie-deitado.jpg" alt="cachorro Border-Collie">
      </a>';

      echo '<a href="Animais.php?animal=gato">';
      echo '<img class="img-thumbnail img1" src="https://static.wixstatic.com/media/ec604f_d4b483ef20aa438188bdbc08e17954b6~mv2.jpg/v1/fill/w_640,h_426,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/ec604f_d4b483ef20aa438188bdbc08e17954b6~mv2.jpg" alt="">
      </a>';

      echo '<a href="Animais.php?animal=furao">';
      echo '<img class="img-thumbnail img1" src="https://blog-static.petlove.com.br/wp-content/uploads/2020/10/ferret-furao-petlove.jpg" alt="">
      </a>';

      echo '<a href="Animais.php?animal=cacatua">';
      echo '<img class="img-thumbnail img1" src="https://guiaanimal.net/uploads/content/image/5726/AdobeStock_249892550.jpeg" alt="">
      </a>';

      echo '</div>';
      echo '</div>';
      }
    ?>

    <style>
      .img1{
        width: 20vw;
      }
      .img2{
        display: flex;
        width: 40%;
        margin-left: auto;
        margin-right: auto;
        margin-top: 2vw;
      }
    </style>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>