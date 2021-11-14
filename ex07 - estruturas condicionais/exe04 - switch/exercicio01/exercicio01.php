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
        $n = isset($_GET["num"]) ? $_GET["num"] : 0;

        $op = isset($_GET["oper"]) ? $_GET["oper"] : "dobro";

        $r = 0;

        switch($op){
            case "dobro":
                $r = $n * 2;
            break;

            case "cubo":
                $r = pow($n, 3);
            break;

            case "raiz":
                $r = sqrt($n);
        }

        echo "A operação é $op de $n, e o resultado é $r.";
    ?>

    <br><br>

    <a href="exercicio01.html">Voltar</a>
</body>
</html>