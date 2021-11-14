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
        # ord = faz o contrário do chr, ou seja, mostra o código de uma tecla

        $letra = "Ç";
        $cod = ord($letra);
        echo "A letra Ç tem código ". $cod. ".";
    ?>
</body>
</html>