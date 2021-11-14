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
        $n = isset($_GET["numeros"]) ? $_GET["numeros"] : 0;

        $multiplicador = 0;

        echo "<h1>Tabuada do número $n</h1>";

        do{
            echo "$n x $multiplicador = ". ($n * $multiplicador). "<br>";
            $multiplicador++;
        }
        while($multiplicador <= 10);
    ?>
</body>
</html>