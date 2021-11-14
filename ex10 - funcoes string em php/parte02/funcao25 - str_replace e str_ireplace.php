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
        # str_replace = muda uma parte de uma string por outra; é case-sensitive.
        
        $frase = "Gosto de estudar tal coisa!!";

        $novaFrase = str_replace("tal coisa", "PHP", $frase);
        # ordem: coisa que vai ser substituída, coisa que vai substituir, string que vai ocorrer a substituição

        echo $novaFrase;

        echo "<br>". str_repeat("-", 50). "<br>";

        $novaFrase = str_ireplace("TAL COISA", "PHP", $frase);
        # str_ireplace = mesmo que a outra, mas NÃO É case-sensitive

        echo $novaFrase;
    ?>
</body>
</html>