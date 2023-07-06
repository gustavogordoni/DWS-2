<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1 - Formulário gerador de página </title>
    <link rel="stylesheet" href="Ex1.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="tudo.css">  
</head>
<body>
    <h1>Exercício 1 - Formulário gerador de página</h1>

    <form action="destino.php" method="POST">
        <div class="d">
        <div class="d1">
        <label for="titulo">Título da página: </label>
        </div>
        <div class="d2">
        <input type="text" id="titulo" name="titulo">
        </div>
        </div>

        <br>

        <div class="d">
        <div class="d1">
        <label for="corpo">Corpo: </label>
        </div>
        <div class="d2">
        <textarea name="corpo" id="corpo" rows="3"></textarea>
        </div>
        </div>

        <br>

        <div class="d">
        <div class="d1">
        <label for="color">Cor do texto: </label>
        </div>
        <div class="d2">
        <input type="color" id="color" name="color">
        </div>
        </div>

        <br>

        <div class="d">
        <div class="d1">
        <label for="img">URL de uma imagem: </label>
        </div>
        <div class="d2">
        <input type="url" id="img" name="img">
        </div>
        </div>

        <br>

        <div class="d">
        <div class="d1">
        <label for="url">URL de link: </label>
        </div>
        <div class="d2">
        <input type="url" id="url" name="url">
        </div>
        </div>
        
        <br>

        <div class="d">
        <div class="d1">
        <label for="fundo">Cor de fundos da página:</label>
        </div>
        <div class="d2">
        <input type="color" id="fundo" name="fundo">
        </div>
        </div>

        <br>

        <div class="d">
        <div class="d3">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <button type="reset" class="btn btn-warning">Limpar</button>
        </div>
        </div>

    </form>

    <br>
    <a href="Menu.php">Voltar ao menu principal</a>
   
</body>
</html>