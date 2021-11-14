<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores e Matrizes</title>
</head>
<body>  
    <?php
        $v = array("nome" => "Ana", "idade" => 23, "peso" => 65.5);
        var_dump($v);
        
        $v["fuma"] = false;
        var_dump($v);

        foreach($v as $k => $c){
            if($c == false){
                echo "O campo $k possui conteúdo false. <br>";
            }
            else{
                echo "O campo $k possui conteúdo $c. <br>";
            }
        }
        # se os campos de $v fossem $k, eles tem a associação de um valor $c
    ?>
</body>
</html>