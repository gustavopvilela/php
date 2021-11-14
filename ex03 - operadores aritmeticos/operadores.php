<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        # isso pega valores da URL, deve-se digitar após ela "?variavel=valor&variavel2=valor2"
        
        $media = ($n1 + $n2) / 2;

        echo "O primeiro número é $n1, e o segundo, $n2. <br>";
        echo "A soma deles é ". ($n1 + $n2). "."; # concatenação
        echo "<br>A subtração deles é ". ($n1 - $n2). "."; # concatenação
        echo "<br>A multiplicação deles é ". ($n1 * $n2). "."; # concatenação
        echo "<br>A divisão deles é ". ($n1 / $n2). "."; # concatenação
        echo "<br>O módulo (resto) deles é ". ($n1 % $n2). "."; # concatenação
        echo "<br>A média deles é $media.";

        echo "<br><br>A ordem de precedência dos cálculos é o mesmo da matemática tradicional.";
    ?>
</body>
</html>