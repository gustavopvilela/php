<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03 - Operadores relacionais</title>
</head>
<body>
    <?php
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];

        $media = ($nota1 + $nota2) / 2;

        echo "A média das notas é $media. O aluno está ". (($media >= 6) ? "aprovado" : "reprovado"). ".";
    ?>
</body>
</html>