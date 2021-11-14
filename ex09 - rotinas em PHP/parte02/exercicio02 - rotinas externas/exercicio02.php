<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinas em PHP</title>
</head>
<body>  
    <?php
        # usa-se o include para inportar as funções do arquivo "funcoes.php".
        include "funcoes.php";

        echo "<h1>Testando novas funções</h1>";

        ola();
        mostraValor(4);

        echo "<h2>Finalizando programa...</h2>";

        # usa-se o require quando o arquivo é obrigatório, se ele não encontra o arquivo, ele para de carregar a página, no caso abaixo, o arquivo não existe.
        require "funcoes2.php";

        # o include_once e o require_onde carregam o script somente uma vez, não importa o quanto coloque no código, isso evita uma maior carga no site.
    ?>
</body>
</html>