<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integração HTML e PHP</title>

    <?php
        $texto = isset($_GET["t"]) ? $_GET["t"] : "Texto genérico";
        
        $tamanho = isset($_GET["tam"]) ? $_GET["tam"] : "12pt";
        
        $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#000000";
    ?>

    <style>
        p{
            font-size: <?php echo $tamanho; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>  
    <?php
        echo "<p>$texto</p>";
    ?>
</body>
</html>