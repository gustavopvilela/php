<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de repetição</title>
</head>
<body>
    
    <?php
        $i = 1;
        while($i <= 5){
            $v = "num". $i; # variável que comporta os campos
            $url = "v". $i; # pega os names dos campos na URL
            $$v = isset($_GET[$url]) ? $_GET[$url] : 0; # verifica se os campos estão vazios ou não, utilizando variável de variável é mais fácil conferir; com isso já são setados os valores delas ($num1, $num2).
            $i++;
        }

        $i = 1;
        while($i <= 5){
            $v = "num". $i; # variável que comporta os campos
            echo "Valor $i: ". $$v. "<br>"; # o $$v é as variáveis (num1, num2) preenchidas anteriormente; por isso o $v é necessário novamente (apesar de ter mais formas de fazer esse exercício.)
            $i++;
        }

        # break: quebra o laço
        # continue: volta ao início do laço
    ?>
</body>
</html>