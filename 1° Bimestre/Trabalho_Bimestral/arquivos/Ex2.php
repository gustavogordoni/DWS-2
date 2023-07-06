<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2 - Formatador de texto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="tudo.css">  
</head>
<body>

    <?php
    $cor = filter_input(INPUT_GET, "cor", FILTER_SANITIZE_SPECIAL_CHARS);
    $alinhamento = filter_input(INPUT_GET, "alinhamento", FILTER_SANITIZE_SPECIAL_CHARS);
    $tamanho = filter_input(INPUT_GET, "tamanho", FILTER_SANITIZE_SPECIAL_CHARS);
    ?>

    <h1>Exercício 2 - Formatador de texto</h1>

    <div>
    <p class="p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed suscipit lacus, eget semper dolor. Mauris efficitur bibendum risus eu scelerisque. Proin accumsan consequat posuere. Etiam velit neque, porta et consequat ac, laoreet ac sapien. </p>

    <p class="p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus et elit non aliquet. Nam ultrices tempus sagittis. Quisque in sagittis felis. Donec consectetur ex id pulvinar dapibus.</p>
    </div>

    <h2>Controles</h2>

    <p>Cor do texto dos parágrafos:</p>
    <a href="Ex2.php?cor=red&alinhamento=<?= $alinhamento?>&tamanho=<?= $tamanho?>">
    <button>Vermelho</button>
    </a>
    <a href="Ex2.php?cor=green&alinhamento=<?= $alinhamento?>&tamanho=<?= $tamanho?>">
    <button>Verde</button>
    </a>
    <a href="Ex2.php?cor=blue&alinhamento=<?= $alinhamento?>&tamanho=<?= $tamanho?>">
    <button>Azul</button>
    </a>

    <br><br>

    <p>Alinhamento dos parágrafos:</p>
    <a href="Ex2.php?cor=<?= $cor?>&alinhamento=left&tamanho=<?= $tamanho?>">
    <button>Esquerda</button>
    </a>
    <a href="Ex2.php?cor=<?= $cor?>&alinhamento=center&tamanho=<?= $tamanho?>">
    <button>Centro</button>
    </a>
    <a href="Ex2.php?cor=<?= $cor?>&alinhamento=right&tamanho=<?= $tamanho?>">
    <button>Direita</button>
    </a>

    <br><br>

    <p>Tamanho da fonte do texto dos parágrafos:</p>
    <a href="Ex2.php?cor=<?= $cor?>&alinhamento=<?= $alinhamento?>&tamanho=small">
    <button>Pequena</button>
    </a>
    <a href="Ex2.php?cor=<?= $cor?>&alinhamento=<?= $alinhamento?>&tamanho=medium">
    <button>Média</button>
    </a>
    <a href="Ex2.php?cor=<?= $cor?>&alinhamento=<?= $alinhamento?>&tamanho=large">
    <button>Grande</button>
    </a>

    <br><br>

    <a href="Menu.php">Voltar ao menu principal</a>


    <style>
        .p{
            color:<?= $cor?>;
            text-align:<?= $alinhamento?>;
            font-size:<?= $tamanho?>;
        }

        div{
            margin: 1vw 0 1vw 0;
            border-bottom: 1px rgb(209, 209, 209) solid;
            border-top: 1px rgb(209, 209, 209)  solid;
        }
    
    </style>
    
</body>
</html>