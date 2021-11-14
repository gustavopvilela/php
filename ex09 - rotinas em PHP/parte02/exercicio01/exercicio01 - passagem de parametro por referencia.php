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
        # passagem de parâmetro por VALOR
        function teste($x){
            $x += 2;
            echo "O valor de X é $x.<br>";
        }

        echo "<h3>Passagem de parâmetro por VALOR</h3>";
        $a = 3;
        teste($a);
        echo "O valor de A é $a.<br>";

        echo "<hr>";

        # passagem de parâmetro por REFERÊNCIA
        function teste2(&$x){
            $x += 2;
            echo "O valor de X é $x.<br>";
        }

        echo "<h3>Passagem de parâmetro por REFERÊNCIA</h3>";
        # qualquer alteração no valor de X também afetará a A, pois estão relacionados
        $a = 3;
        teste2($a);
        echo "O valor de A é $a.<br>";
    ?>
</body>
</html>