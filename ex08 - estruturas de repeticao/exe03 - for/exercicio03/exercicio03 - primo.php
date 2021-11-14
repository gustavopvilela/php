<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de repetição</title>
</head>
<body>  
    <?php
        # ver se o numero e primo

        $num = isset($_GET["num"]) ? $_GET["num"] : 0;

        $contador = 0;

        $isPrimo = "";

        echo "<h2>Análise do número $num</h2>";

        echo "São múltiplos de $num: ";
        for($i = 1; $i <= $num; $i++){
            if($num % $i == 0){
                echo "$i; ";
                $contador += 1;
            }
        }

        if($contador == 2){
            $isPrimo = " é primo";
        }
        elseif($contador > 2){
            $isPrimo = " não é primo";
        }
        elseif($contador == 1){
            $isPrimo = " não se encaixa nos conceitos de número primo";
        }
        elseif($num == 0){
            $isPrimo = ", apesar de não ter nenhum divisor que o antecede, consegue se dividir com todos os seus posteriores, então, não é primo";
        }

        echo "<br>O total de múltiplos de $num são $contador. <br>Portanto, o número $num$isPrimo.";
    ?>
</body>
</html>