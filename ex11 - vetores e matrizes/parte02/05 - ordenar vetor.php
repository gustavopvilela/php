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

        sort($n);
        # depois desse comando o array já está em ordem crescente; serve para letras e números

        var_dump($n);

        rsort($n);
        # depois desse comando o array já está em ordem decrescente; serve para letras e números

        var_dump($n);

        asort($n);
        # coloca em ordem crescente mas mantém os mesmos índices de antes; se o valor no índice 0 for o maior, o índice 0 vai ir pro final e assim por diante.

        var_dump($n);

        arsort($n);
        # coloca em ordem decrescente mas mantém os mesmos índices de antes

        var_dump($n);

        $m = array(3 => "C", 2 => "E", 0 => "H", 4 => "I", 1 => "B");
        var_dump($m);

        ksort($m);
        # ordena os índices (chaves) do vetor de forma crescente, mas ao mesmo tempo troca de lugar os valores, mas estes não necessariamente em uma ordem crescente ou decrescente

        var_dump($m);

        krsort($m);
        # ordena os índices (chaves) do vetor de forma decrescente, mas ao mesmo tempo troca de lugar os valores, mas estes não necessariamente em uma ordem crescente ou decrescente

        var_dump($m);
    ?>
</body>
</html>