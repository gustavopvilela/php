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
        # não retorna valor
        function soma($a, $b){
            $s = $a + $b;
            echo "A soma entre $a e $b vale ". $s. ".<br>";
        }

        soma(3, 4);
        soma(8, 2);
        $x = 56;
        $y = 897;
        soma($x, $y);
    ?>
</body>
</html>