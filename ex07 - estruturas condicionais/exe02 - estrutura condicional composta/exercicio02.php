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

        $tipoVoto = "";

        if($idade < 16){
            $tipoVoto = "não vota";
        }
        else{
            if(($idade == 16) || ($idade == 17) || ($idade > 65)){
                $tipoVoto = "voto opcional";
            }
            else{
                $tipoVoto = "voto obrigatório";
            }
        }

        /* O código acima poderia também ser escrito como:
        
        if($idade < 16){
            $tipoVoto = "não vota";
        }
        elseif(($idade == 16) || ($idade == 17) || ($idade > 65)){
            $tipoVoto = "voto opcional";
        }

        # o "else if" pode ser escrito tanto junto quanto separado.

        else{
            $tipoVoto = "voto obrigatório";
        }  */

        echo "Tens $idade anos, para essa idade, $tipoVoto."
    ?>
</body>
</html>