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
        # isset indica se foi ou não configurado ou informado
        
        $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[Não informado]";
        
        $ano = isset($_GET["ano"]) ? $_GET["ano"] : date("Y");
        
        $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[não informado]";
        # A variável acima só é possível porque os botões radio tem o atributo value.
        $idade = date("Y") - $ano;
        # "Y" mostra o ano inteiro, "y" só os últimos dois dígitos.

        echo "$nome é $sexo e tem $idade anos."
    ?>

    <br><br>

    <a href="exercicio02.html">Voltar</a>
</body>
</html>