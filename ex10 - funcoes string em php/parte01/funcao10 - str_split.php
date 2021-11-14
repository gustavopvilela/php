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
        # str_split = quebra a palavra em seus caracteres e cria um vetor com cada letra em uma posição; espaços contam como caractere e letras com acento e cedilha contam como dois caracteres (a letra em si e o acento dela)

        $nome = "Maria e Joao";
        $q = str_split($nome);
        var_dump($q);
    ?>
</body>
</html>