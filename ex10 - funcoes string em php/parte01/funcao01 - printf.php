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
        # printf = mostrar com formatação
        $prod = "leite";
        $preco = 4.5;

        printf("O %s está custando R$ %.2f.", $prod, $preco);

        # no fim, deve-se colocar as variáveis em ordem

        # %s = string
        # %f = float
        # %.2f = float com duas casas decimais
        # %d =  valor decimal (positivos ou negativos)
        # %u = valor decimal sem sinal
    ?>
</body>
</html>