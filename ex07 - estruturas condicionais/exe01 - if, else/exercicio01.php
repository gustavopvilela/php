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
        $ano = isset($_GET["ano"]) ? $_GET["ano"] : date("Y");

        $idade = date("Y") - $ano;

        $v = "";
        $d = "";

        if($idade >= 18){
            $v = "já pode votar";
            $d = "já pode dirigir";
        }
        else{
            $v = "não pode votar";
            $d = "não pode dirigir";
        }

        echo "Nasceste em $ano e tens $idade anos, portanto $v e $d.";
    ?>
</body>
</html>