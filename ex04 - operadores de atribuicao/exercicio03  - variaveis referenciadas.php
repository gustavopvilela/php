<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03 - Operadores de atribuição</title>
</head>
<body>
    <?php
        $a = 3;
        $b = $a; # "b" tem o valor de "a"
        $b += 5; # "b" recebe mais 5, fica 8
        echo $a; # 3
        echo "<br>". $b; # 8

        $a = 4;
        $b = &$a; # "b" está referenciado a "a", entao, qualquer mudança de "b" também afetará a
        $b += 5; # b == 9 e a também igual 9;
        echo "<br><br><br>Variáveis referenciadas";
        echo "<br>". $a; # 9
        echo "<br>". $b; # 9
    ?>
</body>
</html>