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
        # substr = definida a posição de início e quantas letras andar a partir dela, a substr pega o que está dentro desse intervalo na string; a primeira posição da string é 0; letras com acento contam como 2
        
        $site = "Curso em Video";

        $sub = substr($site, 0, 5);
        # comceça na posição 0 e anda 5, então são as letras nas posições 0, 1, 2, 3 e 4

        echo $sub;
        # output: "Curso ".

        echo "<br>---------------------<br>";

        $sub = substr($site, 6);
        echo $sub;
        # colocando um só valor, a substr pega a letra daquela posição em diante
        # output: "em Vídeo"

        echo "<br>---------------------<br>";

        $sub = substr($site, -5);
        echo $sub;
        # colocando nº negativo, ele pega a quantidade das últimas letras da string
        # output: Vídeo

        echo "<br>---------------------<br>";

        $sub = substr($site, -5, 2);
        echo $sub;
        # colocando um nº negativo e depois um positivo, ele vai pegar das últimas letras (5), mas da substring dessas últimas letras, a função vai pegar só 2
        # output: Vi
    ?>
</body>
</html>