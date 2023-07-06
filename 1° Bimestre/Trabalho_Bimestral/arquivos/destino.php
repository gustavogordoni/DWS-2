<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tudo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="tudo.css">  
    <title>Destino</title>
</head>
<body>
    <?php
    $titulo = filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_SPECIAL_CHARS);
    $corpo = filter_input(INPUT_POST, "corpo", FILTER_SANITIZE_SPECIAL_CHARS);
    $cor_txt = filter_input(INPUT_POST, "color", FILTER_SANITIZE_SPECIAL_CHARS);
    $img = filter_input(INPUT_POST, "img", FILTER_SANITIZE_SPECIAL_CHARS);
    $url = filter_input(INPUT_POST, "url", FILTER_SANITIZE_SPECIAL_CHARS);
    $cor_fundo = filter_input(INPUT_POST, "fundo", FILTER_SANITIZE_SPECIAL_CHARS);

    echo "<h1>$titulo</h1>
    <br>
    <p>$corpo</p>
    <br>   
    <img src='$img'>
    <br><br>
    <a href='$url'>$url</a>";
    ?>

    <style>
     
        p{
            color:<?php echo $cor_txt?>;
        }
        h1{
            color:<?php echo $cor_txt?>;
        }
        body{
            background-color: <?php echo $cor_fundo?>;
        }
    </style>

    <br><br>
    <a href="Menu.php">Voltar ao menu principal</a>
    
</body>
</html>