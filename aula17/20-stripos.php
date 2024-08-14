<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="_css/estilo.css"/>
    </head>
    <body>
        <div>
            <?php
                $frase = "Estou aprendendo PHP";
                $pos = stripos($frase, "php");
                echo "A string foi encontrada na posição $pos";
            ?>
        </div>
    </body>
</html>
