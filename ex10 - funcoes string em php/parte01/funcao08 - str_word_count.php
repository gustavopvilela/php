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
        # str_word_count = mostra a qtde de palavras
        $frase = "Eu estou estudando PHP";
        $cont = str_word_count($frase, 0);

        echo $cont;
        echo "<br><br>";

        # o 0 conta as palavras

        # se colocar 1, ele cria um vetor com as palavras (uma palavra em cada posição)
        
        # se colocar 2, ele cria um vetor com as palavras (mas a posição de cada palavra depende da quantidade de caracteres da outra [ele conta os espaços para DEFINIÇÃO DA POSIÇÃO, mas não visualmente])

        $cont = str_word_count($frase, 1);
        var_dump($cont);

        echo "<br><br>";

        $cont = str_word_count($frase, 2);
        var_dump($cont);
    ?>
</body>
</html>