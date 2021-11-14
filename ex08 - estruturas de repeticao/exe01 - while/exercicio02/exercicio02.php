<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de repetição</title>
</head>
<body>
    <form action="02-parte2.php" method="get">
        <?php
            $c = 1;

            while ($c <= 5){
                echo "<label for='v$c'>Valor $c: </label>";
                echo "<input type='number' name='v$c' id='v$c' max='100' min='0' value='0'><br>";
                $c++;
            }
        ?>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>