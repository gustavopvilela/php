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
        $regiao = isset($_GET["estados"]) ? $_GET["estados"] : "";

        switch($regiao){
            case "CO":
                echo "Você mora na região Centro-Oeste.";
                break;
            case "NE":
                echo "Você mora na região Nordeste.";
                break;
            case "NO":
                echo "Você mora na região Norte.";
                break;
            case "SE":
                echo "Você mora na região Sudeste.";
                break;
            case "SU":
                echo "Você mora na região Sul.";
                break;
            default:
                echo "Estado inválido.";
        }
    ?>
</body>
</html>