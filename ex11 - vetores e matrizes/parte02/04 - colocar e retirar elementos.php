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
        $n = array("A", "J", "M", "X", "K");

        # colocar elemento no fim do vetor
        $n[] = "O";
        var_dump($n);

        array_push($n, "Z");
        var_dump($n);

        # tirar último elemento
        array_pop($n);
        var_dump($n);

        # colocar elemento no início do vetor
        array_unshift($n, "Ç");
        var_dump($n);

        # tirar primeiro elemento
        array_shift($n);
        var_dump($n);
    ?>
</body>
</html>