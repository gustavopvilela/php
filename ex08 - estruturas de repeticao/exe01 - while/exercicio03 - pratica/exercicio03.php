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
        $inicio = isset($_GET["inicio"]) ? $_GET["inicio"] : 0;

        $fim = isset($_GET["fim"]) ? $_GET["fim"] : 10;

        $incremento = isset($_GET["incremento"]) ? $_GET["incremento"] : 1;

        if($inicio < $fim){
            while($inicio <= $fim){
                echo $inicio. "<br>";

                $inicio += $incremento;
            }
        }
        elseif($inicio > $fim){
            while($inicio >= $fim){
                echo $inicio. "<br>";

                $inicio -= $incremento;
            }
        }
    ?>
</body>
</html>