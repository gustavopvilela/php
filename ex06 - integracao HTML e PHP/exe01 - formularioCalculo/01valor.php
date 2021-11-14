<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integração HTML e PHP</title>
</head>
<body>  
    <?php
        $valor = $_GET["v"];
        echo "O valor enviado é $valor e sua raiz quadrada é ". number_format((sqrt($valor)), 2, ",", "."). ".";
    ?>

    <br>
    <br>
    
    <a href="exercicio01.html">Voltar</a>
</body>
</html>