<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 - Lâmpada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="tudo.css">  
  
</head>
<body>
    <?php
    $img = filter_input(INPUT_POST, "img", FILTER_SANITIZE_SPECIAL_CHARS);
    $cor = filter_input(INPUT_GET, "cor", FILTER_SANITIZE_SPECIAL_CHARS);
    $img = filter_input(INPUT_GET, "img", FILTER_SANITIZE_SPECIAL_CHARS);
    $fundo = filter_input(INPUT_GET, "fundo", FILTER_SANITIZE_SPECIAL_CHARS);
   
    ?>

    <h1>Exercício 3 - Lâmpada liga/desliga com PHP</h1>

    <div>
    <a href="Ex3.php?fundo=white&img=lampada-acesa.png&cor=black">
    <button type="button" class="btn btn-primary">Acender</button>
    </a>

    <img src="<?= $img?>">
   
    <a href="Ex3.php?fundo=black&img=lampada.png&cor=white">
    <button type="button" class="btn btn-primary">Apagar</button>

    </a>
    </div>
    <br><br>

    <a href="Menu.php">Voltar ao menu principal</a>

    <style>
        body{
            background-color:<?= $fundo?>;
        }
        h1{
            color:<?= $cor?>;
        }
        div{
            display: flex;
            align-items:flex-end;
            justify-content: space-around;
        }
    </style>

</body>
</html>