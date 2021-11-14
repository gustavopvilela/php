<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas condicionais</title>
</head>
<body>  
    <?php
        $nota1 = isset($_GET["nota1"]) ? $_GET["nota1"] : 0;

        $nota2 = isset($_GET["nota2"]) ? $_GET["nota2"] : 0;

        $media = ($nota1 + $nota2) / 2;

        $situacao = "";

        if($media < 5){
            $situacao = "REPROVADO";
        }
        elseif($media >= 5 && $media < 7){
            $situacao = "RECUPERAÇÃO";
        }
        else{
            $situacao = "APROVADO";
        }

        echo "A nota 1 é ". number_format($nota1, 1, ",", "."). " e a nota 2 é ". number_format($nota2, 1, ",", "."). ". A média delas é ". number_format($media, 1, ",", "."). ".<br>A situação do aluno é: ". $situacao. "."
    ?>
</body>
</html>