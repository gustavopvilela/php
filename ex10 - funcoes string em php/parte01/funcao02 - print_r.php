<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções String em PHP</title>
</head>
<body>  
    <?php
        # print_r = mostra detalhes de uma variável (principalmente se for vetor)

        echo "<h3>print_r</h3>";

        $x[0] = 4;
        $x[1] = 3;
        $x[2] = 8;

        print_r($x);
        # output: Array ( [0] => 4 [1] => 3 [2] => 8 )

        echo "<br>----------------------<br>";

        $x2 = array(3, 7, 6, 2, 1, 9);
        print_r($x2);
        # output: Array ( [0] => 3 [1] => 7 [2] => 6 [3] => 2 [4] => 1 [5] => 9 )

        echo "<br>----------------------<br>";

        # a função print_r pode também ser subistituída por var_dump() e var_export()

        echo "<h3>var_export</h3>";
        var_export($x);

        echo "<br>----------------------<br>";

        echo "<h3>var_dump</h3>";
        var_dump($x2);
    ?>
</body>
</html>