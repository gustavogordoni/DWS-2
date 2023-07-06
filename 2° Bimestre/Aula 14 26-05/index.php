<!doctype html>
<html lang="pt-br" data-bs-theme="light">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Praticando 1 - Funções Built-in e Coleções (Arrays)</title>
    <link rel="stylesheet" href="style.css">
    <script src="dark.js">temaDark()</script> 
    
  </head>
  <body>
    
    <?php 
      date_default_timezone_set('America/Sao_Paulo');
      $data = date('d/m/Y');
      $hora = date('H:i');

      $text = filter_input(INPUT_POST, "text", FILTER_SANITIZE_SPECIAL_CHARS);
      $text = trim($text);

      if (isset($_POST['limpar'])) {
        $text = "";
      }

      // --- DARK MODE ------------------------- //

      $value = "Dark";
      $class = "btn-dark";
      $tema = filter_input(INPUT_POST, "tema", FILTER_SANITIZE_SPECIAL_CHARS);
     
      
      if(!isset($tema)){
        $tema = "Light";
      }
      
      if ($tema == "Dark") {
        echo '<script>temaDark();</script>';
        $value = "Light";
        $class = "btn-light";
      } 
      else {
        echo '<script>temaLight();</script>';
        $value = "Dark";
        $class = "btn-dark";
      }
          
      setcookie("mode", $tema);
      $cookies = $_COOKIE["mode"];
          
      // ------------------------------------- //
          
    ?>
      <!--
        https://www.php.net/manual/pt_BR/function.setcookie.php
      -->
      
      <div class="container">
        
        <div class="row mt-1">
          <div class="col-10 my-auto">
          <h1>Praticando 1 - Funções Built-in e Coleções (Arrays)</h1>
        </div>
        
        <div class="col-2 d-flex my-auto">
          <form action="." method = "POST">
            <button value = "<?= $value ?>" type="submit" class="btn <?= $class ?> p-3 mx-auto rounded-pill" id="alterar_tema" name = "tema"><?= $value ?> mode</button>
          </form>
        </div>
        <!--
        <div class="col-2 d-block my-auto">
          <button type="button" class="btn custom-button dark" id="themes">
            <span class="circle" aria-hidden="true">  
              <span class="icon arrow"></span>
            </span>
            <span id = "button-text" class="button-text mt-1 fs-5">Dark Mode</span>
          </button>
        </div>  
      -->      
      </div> 
    
      <hr>
     
      <div class="row">
         <!-- FORM -->
        <div class="col-6 border-end">
          <form action="." method = "POST">
            <label for="text" class="form-label">Texto: </label>
            <textarea class="form-control" id="text" rows="3" name = "text"><?php echo $text;?></textarea>

            <button type="submit" class="btn btn-success mt-3">Enviar</button>
            <button type="submit" class="btn btn-warning mt-3" name="limpar">Limpar</button>  
          </form> 
        </div>
          <!-- FECHA FORM -->
          
        <div class="col-6">
          <?php 
            if (!empty($text)){
              // RESULTADO VISUAL
              require 'resposta.php';

              // FILE: logs.txt
              $txt = fopen("logs.txt", "a+");

              fwrite ($txt, "Texto: \n \n");
              fwrite ($txt, "$text \n \n");
              fwrite ($txt, "Hoje é dia $data e agora são $hora\n \n");
              fwrite ($txt, "__________________________________________________________________________\n");

              fclose($txt);
            }
          ?>          
        </div>

      </div>   

    </div>  
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!--
    <script src="tema.js"></script>
    <script src="tema2.js"></script>
    -->       

  </body>
</html>