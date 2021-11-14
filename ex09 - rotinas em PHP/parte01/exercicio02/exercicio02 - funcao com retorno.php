<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinas em PHP</title>
</head>
<body>  
    <?php
        # retorna valor, e esse valor deve ser colocado dentro de uma variável (o resultado pode ser tratado posteriorente dentro do código).
        function soma($a, $b){
            $s = $a + $b;
            return $s;
            # pode-se colocar tbm um "return $a + $b".
        }

        $x = -45;
        $y = 237;
        $res = soma($x, $y);
        echo "A soma entre $x e $y é $res.";
    ?>
</body>
</html>