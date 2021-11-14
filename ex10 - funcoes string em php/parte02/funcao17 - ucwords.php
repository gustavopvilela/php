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
        # ucwords = deixa a primeira letra de CADA PALAVRA em maiúscula, mas isso NÃO significa que o restante estará minúsculo
        
        $nome = "gustavo vilela";

        echo "Seu nome é ". ucwords($nome). ".";
    ?>
</body>
</html>