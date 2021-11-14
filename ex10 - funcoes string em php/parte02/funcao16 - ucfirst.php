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
        # ucfirst = deixa a PRIMEIRA letra da string em maiúscula, isso NÃO significa que as outras estarão em minúsculas, apenas que a PRIMEIRA será maiúscula
        
        $nome = "Gustavo Vilela";

        echo "Seu nome é ". ucfirst(strtolower($nome)). ".";
        # output: Gustavo vilela
    ?>
</body>
</html>