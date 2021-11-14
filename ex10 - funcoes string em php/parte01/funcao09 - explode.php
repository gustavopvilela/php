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
        # explode = define um caractere de quebra da string, o exclui e cria um vetor com as palavras restantes (uma palavra por posição)
        
        $site = "Curso em Vídeo";
        $vetor = explode(" ", $site);
        var_dump($vetor);
    ?>
</body>
</html>