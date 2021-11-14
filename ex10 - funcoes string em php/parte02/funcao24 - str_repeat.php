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
        # str_repeat = repete uma string determinadas vezes

        $txt = str_repeat("PHP", 5);
        # ordem: palavra a se repetir, qtde de vezes a repetir

        echo "O texto gerado foi '$txt'.<br>";
        echo str_repeat("-", 50);
    ?>
</body>
</html>