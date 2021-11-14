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
        $ano = $_GET["a"];
        $idade = 2021 - $ano;

        $obrigado = ($idade >= 18 && $idade < 65) ? "é" : "não é";

        echo "O eleitor tem $idade anos de idade pois nasceu em $ano, e $obrigado obrigado a votar."
    ?>
</body>
</html>