<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>

    <style>
        body{
            margin: 0;
        }

        h1{
            margin-left: auto;
            margin-right: auto;
            display: flex;
            justify-content: center;
        }

        div{
            border:double blue 3px;
            padding: 1.5vw;
        }

        p{
            border-bottom: solid 1px blue;
        }
        
        strong{
            color:blue;
        }
    
    </style>

<?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $cpf = $_POST["cpf"];
    $cadastro = $_POST["cadastro"];
    $homepage = $_POST["homepage"];
    $notas = $_POST["notas"];
    $cep = $_POST["cep"];
    $end = $_POST["end"];
    $cidade = $_POST["cidade"];
    $foto = $_POST["foto"];
    $sla = $_POST["sla"];

    echo "<h1>DESTINO</h1>";

    echo "<div>";
    echo "<p>Nome: <strong>$nome</strong></p>";
    echo "<p>Email: <strong>$email</strong></p>";
    echo "<p>Telefone: <strong>$phone</strong></p>";
    echo "<p>CPF: <strong>$cpf</strong></p>";
    echo "<p>Cadastro: <strong>$cadastro</strong></p>";
    echo "<p>URL: <strong>$homepage</strong></p>";
    echo "<p>Notas: <strong>$notas</strong></p>";
    echo "<p>CEP: <strong>$cep</strong></p>";
    echo "<p>Endereço: <strong>$end</strong></p>";
    echo "<p>Cidade: <strong>$cidade</strong></p>";
    echo "<p>Foto: <strong>$foto</strong></p>";
    echo "<p>Arquivo pdf: <strong>$sla</strong></p>";

    echo "</div>";
?>

</body>
</html>
