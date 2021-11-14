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
        # stripos = (i de ignore) encontra a posição de uma parte da string; a posição da frase começa em 0; a função NÃO é case-sensitive (NÃO diferencia maiúsculas e minúsculas)
        
        $frase = "Estou aprendendo PHP.";
        $pos = stripos($frase, "PHP");

        echo "$frase<br>A string foi encontrada na posição $pos.";
    ?>
</body>
</html>