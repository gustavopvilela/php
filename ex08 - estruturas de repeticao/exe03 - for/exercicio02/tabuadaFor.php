<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de repetição</title>
</head>
<body>  
    <form action="02-tabuada.php" method="get">
        <label for="num">Selecione um número para tabuada: </label>
        <select name="num" id="num">
            <?php
                for($i = 0; $i <= 10; $i++){
                    echo "<option value='$i'>$i</option>";
                }
            ?>
        </select>

        <br><br>

        <input type="submit" value="Ver tabuada">
    </form>
</body>
</html>