<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 - Operadores relacionais</title>
</head>
<body>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];

        echo "Os valores são $n1 e $n2.<br>";

        $r = ($tipo == "s") ? $n1 + $n2 : $n1 * $n2; # qualquer outra coisa além de "s" cairá na segunda condição

        echo "O resultado é $r."
    ?>
</body>
</html>