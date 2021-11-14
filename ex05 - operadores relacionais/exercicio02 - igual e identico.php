<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 - Operadores relacionais</title>
</head>
<body>
    <?php
        $a = 3;
        $b = "3";

        $r = ($a === $b) ? "Sim." : "Não."; # se é igual em valor e tipo

        echo "As variáveis a e b são idênticas? $r";
    ?>
</body>
</html>