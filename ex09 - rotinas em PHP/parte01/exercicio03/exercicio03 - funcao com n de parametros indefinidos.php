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

        # uma função assim tem os parâmetros vazios, como abaixo
        function soma(){
            $p = func_get_args();
            # isso acima pega os argumentos da função, e é um vetor
            $tot = func_num_args();
            # isso acima pega o número de argumentos da função, e não é um vetor
            $s = 0;

            # um vetor sempre começa na posição 0
            for($i = 0; $i < $tot; $i++){
                $s += $p[$i]; # soma com o nº na pos. i.
            }

            return $s;
        }

        $res = soma(1, 2, 3, 4, 5, 6, 7, 8, 9);
        
        echo "O resultado dos valores é $res.";
    ?>
</body>
</html>