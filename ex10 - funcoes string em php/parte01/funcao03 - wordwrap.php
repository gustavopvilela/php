<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções String em PHP</title>
</head>
<body>  
    <?php
        $txt = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet ligula eget auctor efficitur. Aenean aliquam neque aliquam arcu facilisis aliquet. Nam in elit ac neque egestas tempus. Nam venenatis dictum diam a fringilla. Nunc rhoncus enim sed nisi auctor, non consequat tellus commodo. Nam accumsan luctus sapien id rutrum. Vestibulum in augue sed mauris laoreet ullamcorper. Morbi id turpis posuere, laoreet nisl hendrerit, euismod dolor. Praesent pellentesque ligula ullamcorper nulla tincidunt euismod. Morbi efficitur ipsum et consequat sodales. Donec ipsum justo, fringilla et consectetur euismod, elementum ut magna. Nullam odio erat, pharetra quis varius cursus, hendrerit vitae orci. Donec at ante in massa blandit imperdiet. Mauris blandit velit eu molestie aliquam. Aliquam lobortis augue in leo egestas, eu porta felis mollis. Fusce lacus libero, facilisis a consectetur vel, tristique non sem. Proin fermentum sapien ante, in pharetra leo facilisis ut. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla at commodo lorem. Praesent egestas nisi id tellus maximus, et vestibulum eros tincidunt. Fusce ut pulvinar mauris. Nulla hendrerit mattis tincidunt. Vestibulum consequat neque non velit tristique pulvinar.";

        $res = wordwrap($txt, 2, "<br>\n", false);

        # o true quebra diante da quantidade de caracteres estabelecidos mesmo se a palavra não estiver completa, já o false coloca por palavra, então vai sempre ter palavras inteiras

        echo($res);
    ?>
</body>
</html>