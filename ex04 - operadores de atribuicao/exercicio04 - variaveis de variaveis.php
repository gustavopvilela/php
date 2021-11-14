<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 - Operadores de atribuição</title>
</head>
<body>
    <?php
        $site = "cursoEmVideo";
        $$site = "cursoPHP"; # para usar essa variável, levar-se-á em conta o conteúdo da que ela se refere ($site), então, quando for utilizá-la em outra parte do código, a variável a ser escrita será $cursoEmVideo.

        echo $site;
        echo "<br><br>". $cursoEmVideo; # variável da linha 12
    ?>
</body>
</html>