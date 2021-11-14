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
        $c = 1;

        while($c <= 10){
            echo $c. "<br>";
            $c++;
        }

        echo "---------------------------<br>";

        $c = 10;

        while($c >= 1){
            echo $c. "<br>";
            $c--;
        }
    ?>
</body>
</html>