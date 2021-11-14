<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores e Matrizes</title>
</head>
<body>
    <?php
        $n = array(3, 5, 8, 2);
        print_r($n);

        echo "<br>". str_repeat("-", 50)."<br>";

        echo "<h3>range</h3>";

        $c = range(5, 20, 5);
        print_r($c);
        # no range, há a seguinte ordem: nº de começo, nº de fim, e passos (no caso acima, 5), então vetor será -> 5, 10, 15, 20; com 4 posições

        echo "<br>". str_repeat("-", 50)."<br>";

        echo "<h3>foreach</h3>";

        $d = range(5, 20, 1);

        foreach($d as $v){
            echo "$v";
        }

        echo "<br>". str_repeat("-", 50)."<br>";

        echo "<h3>Posições personalizadas</h3>";

        $v = array(
            1=>"A",
            3=>"B",
            6=>"C",
            8=>"D"
        );
        var_dump($v);
        # o vetor acima tem 4 posições, com índices 1, 3, 6 e 8
        $v[] = "E";
        var_dump($v);

        unset($v[9]);
        # tira uma posição do vetor
        var_dump($v);
    ?>
</body>
</html>