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
        # strtolower = coloca todas as letras da string em minúsculas
        
        $nome = "Gustavo Vilela";

        echo "Seu nome é ". strtolower($nome). ".";
    ?>
</body>
</html>