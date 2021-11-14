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
        # progressivo
        $c = 1;

        do{
            echo $c. "<br>";
            $c++;
        }
        while($c <= 10);

        echo "---------------------<br>";

        # regressivo
        $c = 10;

        do{
            echo $c. "<br>";
            $c--;
        }
        while($c >= 1);
    ?>
</body>
</html>