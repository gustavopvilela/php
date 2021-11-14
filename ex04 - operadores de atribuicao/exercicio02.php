<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 - Operadores de atribuição</title>
</head>
<body>
    <?php
        /*
            pré-incremento: aumenta antes de "mostrar"
            pós-incremento: "mostra" antes de aumentar
            pré-decremento: tira antes de "mostrar"
            pós-decremento: "mostra" antes de tirar
        */
        
        $atual = $_GET["aa"]; // Pega da URL

        echo "O ano atual é $atual, e o anterior é ". --$atual; 
    ?>
</body>
</html>