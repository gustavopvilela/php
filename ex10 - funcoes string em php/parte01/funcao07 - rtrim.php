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
        # rtrim = tira os espaços da direita (fim)
        # AS FUNÇÕES TRIM, LTRIM E RTRIM CONTAM ACENTOS COMO CARACTERES
        
        $nome = "   Jose da Silva   ";
        echo(strlen($nome)). "<br>";
        $novo = rtrim($nome);
        echo($novo). "<br>";
        echo(strlen($novo));
    ?>
</body>
</html>