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
        # str_pad =  faz uma string caber dentro de uma determinada quantidade de caracteres
        
        $nome = "Gustavo";
        $novo = str_pad($nome, 30, "#", STR_PAD_RIGHT);
        /* ordem: string, qtde que quer encaixar, caractere que usa pra completar, e a direção para completar
        
        (RIGHT: depois da string; 
        
        LEFT: antes da string;
        
        BOTH: completa de maneira equivalente antes e depois da string)
        
        output: "Gustavo#######################." */

        echo "A palavra completada é $novo.";
    ?>
</body>
</html>