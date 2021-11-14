<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções aritméticas</title>
</head>
<body>
    <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];

        echo "<h3>Os valores são $v1 e $v2.</h3>";

        echo "<br>O valor absoluto de $v2 é ". abs($v2);
        echo "<br>O valor de ($v2)<sup>$v1</sup> é ". pow($v2, $v1);
        echo "<br>A raiz de $v1 é ". sqrt($v1);
        echo "<br>O valor de $v2 arredondado é ". round($v2); # apenas para valores fracionados
        echo "<br>O valor de $v2 arredondado para cima é ". ceil($v2);
        echo "<br>O valor de $v2 arredondado para baixo é ". floor($v2);
        echo "<br>A parte inteira de $v2 é ". intval($v2);
        
        echo "<br>O valor de $v1 em moeda é R$". number_format($v1, 2, ",", "."); # a ordem é valor, número de casas decimais, separador decimal e separador de milhar
    ?>
</body>
</html>