<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino</title>
</head>
<body>

    <h1>Destino</h1>

<?php
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $corbg = filter_input(INPUT_POST, "corbg", FILTER_SANITIZE_SPECIAL_CHARS);

    echo "<p>O nome informado foi: $nome</p>";
    echo "<p>E o email foi: $email</p>"
?>
    <style>
        body{
            background-color: <?php echo $corbg?>;
        }
    </style>

</body>
</html>