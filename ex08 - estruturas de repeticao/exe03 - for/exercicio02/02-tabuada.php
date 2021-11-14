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
        $n = isset($_GET["num"]) ? $_GET["num"] : 1;

        echo "<h1>Tabuada do número $n:</h1>";
        
        for($i = 0; $i <= 10; $i++){
            echo "$n x $i = ". ($n * $i). "<br>";
        }
    ?>

    <br>

    <a href="javascript:history.go(-1)"><input type="button" value="Voltar"></a>
</body>
</html>