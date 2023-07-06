<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino GET</title>
</head>
<body>

    <h1>Destino GET</h1>

<?php
    $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_EMAIL);
    $cor = filter_input(INPUT_GET, "cor", FILTER_SANITIZE_SPECIAL_CHARS);

    echo "<p>O nome informado foi: $nome</p>";
    echo "<p>E o email foi: $email</p>"
?>    

    <a href="destino.php?nome=Eder&email=epansani@gmail.com&cor=<?=$cor?>">
        Enviar dados [nome = Eder | email = epansani@gmail.com]
    </a>
    <br><br>
    <a href="destino.php?nome=Gustavo&email=gustavo@gmail.com&cor=<?=$cor?>">
        Enviar dados [nome = Gustavo | email = gustavo@gmail.com]
    </a>
<br>
    <p>
        <a href="destino.php">Limpar formulário</a>
    </p> 
    <br>
    <br>
    <a href="destino.php?cor=red&nome=<?=$nome?>&email=<?=$email?>">
        <img src="red.png" alt=""> 
    </a>

    <a href="destino.php?cor=yellow&nome=<?=$nome?>&email=<?=$email?>">
        <img src="yellow.png" alt=""> 
    </a>

    <a href="destino.php?cor=blue&nome=<?=$nome?>&email=<?=$email?>">
        <img src="blue.png" alt=""> 
    </a>

    <style>
        body{
            background-color: <?= $cor?>;
            margin:  0 3vw;
        }

        img{
            margin:0 1vw;
            border:3px solid black
        }
    </style>

</body>
</html>