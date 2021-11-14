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
        # matrizes são arrays com arrays dentro

        $n = array(array(2,3), array(3, 4), array(9,5));
        echo "<pre>";
		var_dump($n);
		echo "</pre>";
        # no exemplo acima, o array de fora é as linhas de uma tabela e os de dentro, as colunas [dados] (imagina como se fosse as tabelas do MySQL)

        echo str_repeat("-", 70). "<br>";

        $m = array(array(6, 4), array(4, 9), array(3,2));
        echo "<pre>";
		var_dump($m);
		echo "</pre>";

        echo str_repeat("-", 70);

        # substituir um valor por outro
        $m[0][1] = [2][0];
        # o primeiro [] é o array que tem arrays dentro, o segundo é do array dentro do array
		echo "<pre>";
        var_dump($m);
		echo "</pre>";
    ?>
</body>
</html>