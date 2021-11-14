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
        $n = isset($_GET["numero"]) ? $_GET["numero"] : 1;

        $c = $n;

        $fat = 1;

        do{
            $fat = $fat * $c;
            $c--;
        }
        while($c >= 1);

        if($n == 0){
            $fat = 1;
        }

        echo "O fatorial de $n ($n!) é $fat.";
    ?>

    <br><br>

    <a href="exercicio02 - fatorial.html">Voltar</a>
</body>
</html>