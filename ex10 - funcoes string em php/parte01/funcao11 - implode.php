<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções String em PHP</title>
</head>
<body>  
    <?php
        # implode = pega um vetor e o transforma em uma string. É necessário definir o caractere que separará cada posição do vetor na string; o join() tem a mesma função

        echo "<h3>implode()</h3>";

        $vetor[0] = "Gustavo";
        $vetor[1] = "Vilela";

        $texto = implode("#", $vetor);
        echo $texto;

        echo "<br>-----------------------------<br>";

        echo "<h3>join()</h3>";

        $texto2 = join(", ", $vetor);
        echo $texto2;
    ?>
</body>
</html>