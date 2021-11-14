<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 - Operadores de atribuição</title>
</head>
<body>
    <?php
        $preco = $_GET["p"];
        $preco2 = $_GET["p2"];

        echo "O preço do produto é ". number_format($preco, 2, ",", ".");

        $preco = $preco + ($preco * (10 / 100)); # -> $preco += ($preco * (10 / 100))
        echo "<br>O novo preço com 10% de aumento é ". number_format($preco, 2, ",", ".");

        echo "<br><br>O preço do produto 2 é ". number_format($preco2, 2, ",", ".");
        $preco2 = $preco2 - ($preco2 * (10 / 100)); # -> $preco2 -= ($preco2 * (10 / 100))
        echo "<br>O novo preço com 10% de desconto é ". number_format($preco2, 2, ",", ".");
    ?>
</body>
</html>