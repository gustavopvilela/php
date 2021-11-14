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
        for($i = 1; $i <= 10; $i++){
            echo $i. "<br>";
        }

        echo "--------------------<br>";

        for($i = 10; $i >= 1; $i--){
            echo $i. "<br>";
        }

        echo "--------------------<br>";

        for($i = 0; $i <= 100; $i += 5){
            echo $i. "<br>";
        }

        echo "--------------------<br>";

        for($i = 20; $i >= 0; $i -= 2){
            echo $i. "<br>";
        }
    ?>
</body>
</html>